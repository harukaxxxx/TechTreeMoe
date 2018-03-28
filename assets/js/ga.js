const gaClientID = '84771301340-kj0vn6hmsg1sskovhnk5homgfntrhhbi.apps.googleusercontent.com'
const gaClientSecret = 'j2W1KNkIw5U2gmc5mBp7FKep'
const gaRefreshToken = '1/VsN173G-axrotwe3a_pRb_D14DsuCfC8QbRc98F0RO5dNVRxCk0kPDjjLEeVQb3x'
let gaAccessToken = ''

function getAccessToken () {
  $.post('https://www.googleapis.com/oauth2/v3/token', {
    client_id: gaClientID,
    client_secret: gaClientSecret,
    grant_type: 'refresh_token',
    refresh_token: gaRefreshToken
  }, function (data, status) {
    if (status === 'success') {
      gaAccessToken = data.access_token
      console.debug('Access token : ' + gaAccessToken)
      checkValidity()
    } else {
      console.debug(status)
    }
  })
}

function checkValidity () {
  $.post('https://www.googleapis.com/oauth2/v3/tokeninfo', {
    access_token: gaAccessToken
  }).done(function (data, status) {
    if (status === 'success') {
      let check = false
      check = data.hasOwnProperty('expires_in')
      if (check) {
        console.debug('Token check : Valid')
        getData()
      }
      if (!check) {
        getAccessToken()
      }
    } else {
      console.debug(status)
    }
  })
    .fail(function (data) {
      console.debug('Invalid token, try to get new one!!')
      getAccessToken()
    })
}

function getData () {
  var QueryURI = 'https://www.googleapis.com/analytics/v3/data/ga?ids=ga%3A128322664&start-date=2018-01-10&end-date=yesterday&metrics=ga%3AtotalEvents&dimensions=ga%3Adate&access_token=' + gaAccessToken
  $.get(QueryURI, function (data, status) {
    if (status === 'success') {
      charts(data.rows) // eslint-disable-line no-undef
      completeChart() // eslint-disable-line no-undef
      completeBar() // eslint-disable-line no-undef
    } else {
      console.debug(status)
    }
  })
}

checkValidity()

/**
*Get Code
*https://accounts.google.com/o/oauth2/auth?scope=https://www.googleapis.com/auth/analytics.readonly&response_type=code&client_id=84771301340-kj0vn6hmsg1sskovhnk5homgfntrhhbi.apps.googleusercontent.com&redirect_uri=http://techtreemoe.makinoworks.com&approval_prompt=force&access_type=offline

$.post('https://www.googleapis.com/oauth2/v3/token', {
  code: '',
  client_id: gaClientID,
  client_secret: gaClientSecret,
  redirect_uri: 'http://techtreemoe.makinoworks.com',
  grant_type: 'authorization_code'
}, function(data, status) {
  if (status === 'success') {
    console.log(data)
  } else {
    console.error(status)
  }
})
*/
