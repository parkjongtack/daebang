@include('inc/head')
<div id="section_inner">
    <h2 class="sub_page_title bar gray">학원오시는길</h2>
    <div class="map_box">
        <div class="map_outer">
            <div id="daumRoughmapContainer1603281489143" class="root_daum_roughmap root_daum_roughmap_landing"></div>
            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
            <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp" : "1603281489143",
                    "key" : "22kcc",
                    "mapWidth" : "904",
                    "mapHeight" : "340"
                }).render();
            </script>
        </div>
        <div class="map_info">
            <div class="address">
                <p><b>주소</b> 서울시 영등포구 경인로 108길 4 신한헤스티아 2층 대방열림고시학원</p>
                <a href="https://m.post.naver.com/viewer/postView.nhn?volumeNo=13122304&memberNo=495834">오시는길<i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="number_box">
                <div>
                    <p class="subject">연락처</p>
                    <p class="text">대표전화 : 02-823-4700</p>
                    <p class="text">FAX번호 : 0504-389-8650</p>
                </div>
                <div>
                    <p class="subject">지하철 이용 시</p>
                    <p class="text">1호선. 영등포역 5번출구 도보 3~4분 거리</p>
                </div>
            </div>
        </div>
</div>
@include('inc/footer')