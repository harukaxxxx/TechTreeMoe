<template>
    <div class="main">
        <div id="intro" class="intro">
    <div class="am-g am-container">
      <div class="am-u-lg-12">
        <h2 class="intro-h2" tkey="tkey_intro_section">介紹與教學</h2>
        <div class="am-g">
          <div class="am-u-lg-6 am-u-md-6 am-u-sm-12 intro-mb">
            <h3 class="intro-h3" tkey="tkey_intro_title">
              <i class="am-icon-info-circle"></i> 介紹</h3>
            <ul class="intro-p">
              <li tkey="tkey_intro_1">艦娘圖標百百種，挑選中意的圖標來萌化科技樹。</li>
              <li tkey="tkey_intro_2">利用
                <span class="am-icon-paint-brush am-text-primary"> 可更替</span> 按鈕可快速尋找可以替換的項目</li>
              <li tkey="tkey_intro_3">
                <span class="am-icon-cloud-download am-text-primary"> 下載</span>時將儲存紀錄，亦可手動點選儲存/載入按鈕。</li>
              <li tkey="tkey_intro_4">此模組不包含背景國旗及艦型小圖標。</li>
            </ul>
          </div>
          <div class="am-u-lg-6 am-u-md-6 am-u-sm-12 intro-mb">
            <h3 class="intro-h3" tkey="tkey_tutorial_title">
              <i class="am-icon-book"></i> 教學</h3>
            <ol class="intro-p">
              <li tkey="tkey_tutorial_1">艦船圖片下的下拉選單可選取並預覽想使用的圖標。</li>
              <li tkey="tkey_tutorial_2">挑選完畢後再點擊右上的
                <span class="am-icon-cloud-download am-text-primary"> 下載</span> 按鈕進行下載。</li>
              <li tkey="tkey_tutorial_3">耐心等待下載完成並解壓縮。</li>
              <li tkey="tkey_tutorial_4">將gui資料夾複製到
                <code>res_mods/__版本號__/</code>裡即可。</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
</template>
<script>
export default {
  data() {
    return {
      sContent: "This is intro components"
    };
  }
};
</script>