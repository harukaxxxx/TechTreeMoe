import Vue from 'vue'
import VueI18n from 'vue-i18n'

Vue.use(VueI18n)

function loadLocaleMessages() {
  const locales = require.context('./locales', true, /[a-z0-9]+\.json$/i)
  const messages = {}
  locales.keys().forEach(key => {
    const matched = key.match(/([a-z0-9]+)\./i)
    if (matched && matched.length > 1) {
      const locale = matched[1]
      messages[locale] = locales(key)
    }
  })
  return messages
}

const languages = navigator.languages
const languageList = ['zh-TW', 'zh-CN', 'en-US', 'ja']
for (let index = 0; index < languages.length; index++) {
  const language = languages[index]
  if (languageList.indexOf(language) >= 0) {
    var locale = languages[index].replace('zh-', '').replace('-US', '')
    break
  } else {
    var locale = 'en'
  }
}

export default new VueI18n({
  locale,
  messages: loadLocaleMessages()
})
