<template>
  <div id="custom" class="main">
    <!-- <div class="filter-group">
      <div class="am-btn-group">
        <button type="button" class="am-btn am-btn-primary am-btn-sm am-round" onclick="filterReset();" tkey="tkey_filter_all">
          <span class="am-icon-tags"></span>全部顯示</button>
      </div>
      <div class="am-btn-group" data-am-button>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_japan">
          <input type="radio" class="options" name="nation" value=".japan">
          <span class="am-icon-flag"></span>日本
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_usa">
          <input type="radio" class="options" name="nation" value=".usa">
          <span class="am-icon-flag"></span>美國
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_ussr">
          <input type="radio" class="options" name="nation" value=".ussr">
          <span class="am-icon-flag"></span>蘇聯
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_germany">
          <input type="radio" class="options" name="nation" value=".germany">
          <span class="am-icon-flag"></span>德國
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_uk">
          <input type="radio" class="options" name="nation" value=".uk">
          <span class="am-icon-flag"></span>英國
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_pan_asia">
          <input type="radio" class="options" name="nation" value=".pan_asia">
          <span class="am-icon-flag"></span>泛亞
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_france">
          <input type="radio" class="options" name="nation" value=".france">
          <span class="am-icon-flag"></span>法國
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_italia">
          <input type="radio" class="options" name="nation" value=".italia">
          <span class="am-icon-flag"></span>義大利
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_commonwealth">
          <input type="radio" class="options" name="nation" value=".commonwealth">
          <span class="am-icon-flag"></span>聯邦
        </label>
      </div>
      <div class="am-btn-group" data-am-button>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_destroyer">
          <input type="radio" class="options" name="type" value=".destroyer">
          <span class="am-icon-anchor"></span> 驅逐艦
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_cruiser">
          <input type="radio" class="options" name="type" value=".cruiser">
          <span class="am-icon-anchor"></span> 巡洋艦
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_battleship">
          <input type="radio" class="options" name="type" value=".battleship">
          <span class="am-icon-anchor"></span> 戰艦
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_aircarrier">
          <input type="radio" class="options" name="type" value=".aircarrier">
          <span class="am-icon-anchor"></span> 航空母艦
        </label>
      </div>
      <div class="am-btn-group" data-am-button>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_change">
          <input type="radio" class="options" name="extra" value=".change">
          <span class="am-icon-paint-brush"></span> 可更替
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round am-icon-premium" tkey="tkey_filter_premium">
          <input type="radio" class="options" name="extra" value=".premium">
          <img src="assets/images/icons/premium_icon.png"> 加值艦
        </label>
      </div>
      <div class="am-btn-group">
        <button type="button" class="am-btn am-btn-primary am-btn-sm am-round" onclick="dataSave()" tkey="tkey_filter_save">
          <span class="am-icon-folder"></span>儲存
        </button>
        <button type="button" class="am-btn am-btn-primary am-btn-sm am-round" onclick="restore()" tkey="tkey_filter_load">
          <span class="am-icon-folder-open"></span>載入
        </button>
        <button type="button" class="am-btn am-btn-primary am-btn-sm am-round" onclick="reset()" tkey="tkey_filter_reset">
          <span class="am-icon-refresh"></span>回復預設
        </button>
      </div>
    </div> -->

    <div class="button-group filter-button-group">
      <button data-filter="*">show all</button>
      <button data-filter=".metal">metal</button>
      <button data-filter=".transition">transition</button>
      <button data-filter=".alkali, .alkaline-earth">alkali & alkaline-earth</button>
      <button data-filter=":not(.transition)">not transition</button>
      <button data-filter=".metal:not(.transition)">metal but not transition</button>
    </div>

    <div class="grid">
      <div class="grid-item transition metal">...</div>
      <div class="grid-item post-transition metal">...</div>
      <div class="grid-item alkali metal">...</div>
      <div class="grid-item transition metal">...</div>
      <div class="grid-item lanthanoid metal inner-transition">...</div>
      <div class="grid-item halogen nonmetal">...</div>
      <div class="grid-item alkaline-earth metal">...</div>
    </div>

    <!-- <div id="Container">
      <template id="shipBox">
        <div class="mix">
          <p class="ship">
            <span class="tier">__TIER__</span>__NAME__</p>
          <div class="img_container">
            <div class="addon">
              <img src="__SHIP_PREVIEWS__">
            </div>
          </div>
          <select name="__ID__" data-am-selected>
            <optgroup label="__BAND__">
              <option value="__ID__-0">【__BAND__】__NAME__</option>
            </optgroup>
          </select>
        </div>
      </template>
    </div> -->

  </div>
</template>
<script>
export default {
  beforeMount() {
    var elem = document.querySelector('.grid')
    var iso = new Isotope(elem, {
      // options
      itemSelector: '.grid-item',
      layoutMode: 'fitRows'
    })

    var isotopeFilter = document.querySelector('.filter-button-group')
    isotopeFilter.on('click', 'button', function() {
      var filterValue = $(this).attr('data-filter')
      $grid.isotope({ filter: filterValue })
    })
  },
  data() {
    return {
      sContent: 'This is custom components'
    }
  }
}
</script>

<style lang="scss">
#custom {
  background: {
    image: url(../assets/images/custom_bg.jpg);
    repeat: no-repeat;
    position: center;
    size: cover;
  }
}
</style>
