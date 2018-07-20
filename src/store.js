import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import JSZip from 'jszip'
import FileSaver from 'file-saver'
import shipData from './assets/shipData.json'
import createPersistedState from 'vuex-persistedstate'
Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    shipData,
    shipDataArray: [],
    selectedOption: {},
    shipDatabase: {},
    modalData: {},
    completeData: {
      commonwealth: { progress: 0, total: 0 },
      france: { progress: 0, total: 0 },
      germany: { progress: 0, total: 0 },
      italia: { progress: 0, total: 0 },
      japan: { progress: 0, total: 0 },
      pan_asia: { progress: 0, total: 0 },
      poland: { progress: 0, total: 0 },
      uk: { progress: 0, total: 0 },
      usa: { progress: 0, total: 0 },
      ussr: { progress: 0, total: 0 },
      pan_america: { progress: 0, total: 0 }
    },
    globalProgress: { progress: 0, total: 0 },
    date: '',
    customModal: false,
    loading: false
  },
  plugins: [createPersistedState()],
  mutations: {
    database: (state, date) => {
      if (state.date === '' || state.date < date) {
        state.date = date

        //Create array of post with specified page amount
        let posts = []
        for (let i = 1; i <= 3; i++) {
          posts.push(
            axios.post(
              `https://api.worldofwarships.asia/wows/encyclopedia/ships/?application_id=01fd1a1abd14396034b6ae87188ab89e&page_no=${i}&language=zh-tw&fields=name,nation,is_premium,images,ship_id_str,tier,type,description`
            )
          )
        }
        //Request all post and push data into state
        axios
          .all(posts)
          .then(
            axios.spread((...res) => {
              for (let i = 0; i < res.length; i++) {
                const data = res[i].data.data
                Object.keys(data).map(ship => {
                  const nation = data[ship].nation
                  const id = data[ship].ship_id_str
                  const name = data[ship].name
                  const tier = data[ship].tier
                  const type = data[ship].type
                  const premium = data[ship].is_premium
                  const imgUrl = data[ship].images.small
                  let shipData = {
                    id,
                    name,
                    nation,
                    tier,
                    type,
                    premium,
                    imgUrl,
                    description: data[ship].description
                  }
                  state.shipDatabase[id] = shipData
                })
              }
            })
          )
          .then(() => {
            Object.keys(state.shipDatabase).map(ship => {
              const name = state.shipDatabase[ship].name
              if (name.substr(0, 1) !== '[') {
                const nation = state.shipDatabase[ship].nation
                if (nation == 'italy') {
                  state.completeData.italia.total++
                } else {
                  state.completeData[nation].total++
                }
                state.globalProgress.total++
              }
            })
            Object.keys(state.shipData).map(nation => {
              state.completeData[nation].progress = Object.keys(state.shipData[nation]).length
              state.globalProgress.progress += Object.keys(state.shipData[nation]).length
            })
          })
      }
    },
    download: state => {
      const zip = new JSZip()
      const cache = {}
      const promises = []

      // init file paths
      let shipPreviews = []
      let shipPreviewsDS = []
      Object.keys(state.selectedOption).map(key => {
        shipPreviews.push(`img/ship_previews/${key}-${state.selectedOption[key]}.png`)
        shipPreviewsDS.push(`img/ship_previews_ds/${key}-${state.selectedOption[key]}.png`)
      })

      // get file function
      const getFile = url => {
        return new Promise((resolve, reject) => {
          axios({
            method: 'get',
            url,
            responseType: 'arraybuffer'
          })
            .then(res => {
              resolve(res.data)
            })
            .catch(error => {
              reject(error.toString())
            })
        })
      }

      // add files into zip
      let filePaths = [shipPreviews, shipPreviewsDS]
      let folderName = ['ship_previews', 'ship_previews_ds']
      for (let index = 0; index < filePaths.length; index++) {
        const filePath = filePaths[index]
        filePath.forEach(item => {
          const promise = getFile(item).then(response => {
            const nameArray = item.split('/')
            const nameOption = nameArray[nameArray.length - 1]
            const fileName = nameOption.split('-')[0] + '.png'
            zip.folder(folderName[index]).file(fileName, response, { binary: true })
            cache[fileName] = response
          })
          promises.push(promise)
        })
      }
      // download with filesaver
      Promise.all(promises).then(() => {
        zip.generateAsync({ type: 'blob' }).then(content => {
          FileSaver.saveAs(content, 'res_mod.zip')
        })
      })
      state.loading = false
    },
    dataInit: state => {
      let shipList = []
      const selectedOptionLen = Object.keys(state.selectedOption).length
      Object.keys(state.shipData).map(nationKey => {
        let nationShips = Object.values(state.shipData[nationKey])
        nationShips.forEach(ship => {
          //Push ship data in to temp array
          shipList.push(ship)
          //Fill default value if selectedOption is empty
          if (selectedOptionLen === 0) {
            state.selectedOption[ship.id] = ship.default
          }
        })
      })
      //Overwrite shipDataArray
      state.shipDataArray = shipList
    },
    reset: state => {
      Object.keys(state.shipData).map(nationKey => {
        let nationShips = Object.values(state.shipData[nationKey])
        nationShips.forEach(ship => {
          //Reset selectedOption
          state.selectedOption[ship.id] = ship.default
        })
      })
    },
    modalControl: (state, payload) => (state.customModal = payload),
    modalData: (state, payload) => (state.modalData = payload),
    updateOption: (state, payload) => (state.selectedOption[payload[0]] = payload[1]),
    loading: (state, payload) => (state.loading = payload)
  },
  getters: {
    shipData: state => state.shipData,
    shipDatabase: state => state.shipDatabase,
    customModal: state => state.customModal,
    shipDataArray: state => state.shipDataArray,
    selectedOption: state => state.selectedOption,
    modalData: state => state.modalData,
    loading: state => state.loading,
    completeData: state => state.completeData,
    globalProgress: state => state.globalProgress
  }
})
