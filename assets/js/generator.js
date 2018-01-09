const nationList = ["commonwealth", "france", "germany", "italy", "japan", "panasia", "poland", "uk", "usa", "ussr"]
nationList.forEach(nation => {
  $.get('assets/database/nationShips/' + nation + '.json')
    .then((response) => {
      $.each(response, function(index) {
        $.get('assets/database/shipJSON/' + index.toUpperCase() + '.json')
          .done(function(shipData) {

            //set box ID & data order
            const content = document.querySelector('#shipBox').content;
            content.querySelector('div').setAttribute('id', shipData['id'])
            content.querySelector('div').setAttribute('data-order', shipData['id'])

            //set box class
            if (shipData['premium']) {
              var premium = 'premium'
            } else {
              var premium = ''
            }
            if (shipData['change']) {
              var change = 'change'
            } else {
              var change = ''
            }
            let boxClassList = ['mix', shipData['type'], shipData['nation'], premium, change]
            content.querySelector('div').classList = boxClassList.join(' ')

            //set box title & tier icon
            content.querySelector('p').classList = 'ship icon-' + shipData['type']
            content.querySelector('p').innerHTML = '<span class="tier">' + shipData['tier'] + '</span>' + shipData['name']

            //set box image
            content.querySelector('img').src = 'assets/images/ship_previews/' + shipData['id'].toUpperCase() + '-' + shipData['default'] + '.png'

            //set box select
            content.querySelector('select').setAttribute('name', shipData['id'])
            content.querySelector('select').innerHTML = '<optgroup label="戰艦世界"><option value=' + shipData['id'] + '-0>【戰艦世界】' + shipData['name'] + '</option></optgroup>'

            // set box select options
            const bandList = ['艦隊收藏', '戰艦少女', '鋼鐵少女', '碧藍航線', '高校艦隊', '最終戰艦', '同人作品', 'November', '蒼藍鋼鐵戰艦', 'Victory Belles']
            const defaultOption = shipData['default']
            for (let bandIndex = 0; bandIndex < bandList.length; bandIndex++) {

              //set box select options
              const band = bandList[bandIndex];
              if (shipData[band]) {
                let optgroup = ['<optgroup label="' + band + '">']
                $.each(shipData[band], function(optID, optName) {
                  if (defaultOption == optID) {
                    var selected = ' selected'
                  } else {
                    var selected = ''
                  }
                  optgroup.push('<option value=' + shipData['id'] + '-' + optID + selected + '>' + optName + '</option>')
                });
                optgroup.push('</optgroup>')
                content.querySelector('select').innerHTML += optgroup.join('')
              }
            }

            //append ship box
            document.querySelector('#Container').appendChild(
              document.importNode(content, true)
            );

            // generate select
            $('#' + shipData['id'] + ' select').selected('enable')
          })
      })

    })
})