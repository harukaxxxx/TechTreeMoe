import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
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
    customModal: false
  },
  plugins: [createPersistedState()],
  mutations: {
    addDatabase: state => {
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
      axios.all(posts).then(
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
    updateOption: (state, payload) => (state.selectedOption[payload[0]] = payload[1])
  },
  getters: {
    shipData: state => state.shipData,
    shipDatabase: state => state.shipDatabase,
    customModal: state => state.customModal,
    shipDataArray: state => state.shipDataArray,
    selectedOption: state => state.selectedOption,
    modalData: state => state.modalData
  }
})
