import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import shipData from './assets/shipData.json'
Vue.use(Vuex)

let shipDataArray = []
let selectedOption = {}
Object.keys(shipData).map(nationKey => {
  let nationShips = Object.values(shipData[nationKey])
  nationShips.forEach(ship => {
    selectedOption[ship.id] = ship.default
    shipDataArray.push(ship)
  })
})

export default new Vuex.Store({
  state: {
    shipData,
    shipDataArray,
    selectedOption,
    shipDatabase: {},
    customModal: false,
    modalData: {}
  },
  mutations: {
    addDatabase(state) {
      if (Object.keys(state.shipDatabase).length === 0) {
        let posts = []
        for (let i = 1; i <= 3; i++) {
          posts.push(
            axios.post(
              `https://api.worldofwarships.asia/wows/encyclopedia/ships/?application_id=01fd1a1abd14396034b6ae87188ab89e&page_no=${i}&language=zh-tw&fields=name,nation,is_premium,images,ship_id_str,tier,type,description`
            )
          )
        }

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
      }
    },
    modalControl(state, payload) {
      state.customModal = payload
    },
    modalData(state, payload) {
      state.modalData = payload
    },
    updateOption(state, payload) {
      state.selectedOption[payload[0]] = payload[1]
    }
  },
  actions: {},
  getters: {
    shipData: state => {
      return state.shipData
    },
    shipDatabase: state => {
      return state.shipDatabase
    },
    customModal: state => {
      return state.customModal
    },
    shipDataArray: state => {
      return state.shipDataArray
    },
    selectedOption: state => {
      return state.selectedOption
    },
    modalData: state => {
      return state.modalData
    }
  }
})
