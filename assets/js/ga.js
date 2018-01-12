const GA_client_id = '84771301340-kj0vn6hmsg1sskovhnk5homgfntrhhbi.apps.googleusercontent.com'
const GA_client_secret = 'j2W1KNkIw5U2gmc5mBp7FKep'
const GA_refresh_token = '1/JCj_71ffI2DEMDao0NZKm2G7ShBlbejHbVLPusxZITYVUzNfANkwQCX0ahNxrLkd'
let GA_access_token = ''

function getAccessToken() {
  $.post('https://www.googleapis.com/oauth2/v3/token', {
    client_id: GA_client_id,
    client_secret: GA_client_secret,
    grant_type: 'refresh_token',
    refresh_token: GA_refresh_token
  }, function(data, status) {
    if (status === 'success') {
      GA_access_token = data.access_token
      console.debug('Access token = ' + GA_access_token)
      checkValidity()
    } else {
      console.debug(status)
    }
  })
}

function checkValidity() {
  $.post('https://www.googleapis.com/oauth2/v1/tokeninfo', {
      access_token: GA_access_token
    }).done(function(data, status) {
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
    .fail(function(data) {
      console.debug('Invalid token, try to get new one!!')
      getAccessToken()
    })
}

function getData() {
  var QueryURI = 'https://www.googleapis.com/analytics/v3/data/ga?ids=ga%3A128322664&start-date=2018-01-10&end-date=yesterday&metrics=ga%3AtotalEvents&dimensions=ga%3Adate&access_token=' + GA_access_token
  $.get(QueryURI, function(data, status) {
    if (status === 'success') {
      charts(data.rows)
      completeChart()
      completeBar()
    } else {
      console.debug(status)
    }
  })
}

checkValidity()

/**
*Get Code
*https://accounts.google.com/o/oauth2/auth?scope=https://www.googleapis.com/auth/analytics.readonly&response_type=code&client_id={{client_id}}&redirect_uri=http://techtreemoe.makinoworks.com&approval_prompt=force&access_type=offline

$.post('https://www.googleapis.com/oauth2/v3/token', {
  code: '',
  client_id: GA_client_id,
  client_secret: GA_client_secret,
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