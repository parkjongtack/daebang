@include('inc/head')
<div id="section_inner">
    <h2 class="sub_page_title bar gray">수강종료 강의</h2>
    <div class="running_box end">
        <div class="running_top">
            <div class="name_box">
                <img src="/img/people_ico.png" alt="">
                <p class="name"><span>홍길동</span>님</p>
            </div>
            <div class="link_box">
                <div>
                    <h4>공지</h4>
                    <span class="bar"></span>
                    <a href="" class="new_ico">전체공지</a>
                    <a href="" class="new_ico">긴급공지</a>
                    <a href="">[보건직 공무원]공지</a>
                </div>
                <div>
                    <h4>학습질문 게시판</h4>
                    <span class="bar"></span>
                    <a href="">게시글이 없습니다.</a>
                </div>
            </div>
        </div>
        <div class="running_bottom">
            <h4>총 <span class="pink">2</span>강좌</h4>
            <ul>
                <li>
                    <div class="study_info">
                        <h4>
                            영양사 - [44회 영양사 합격] 이론 및 문제완성반
                            <span class="study_info_sub">PC + 모바일</span>
                        </h4>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <table class="study_info_table">
                        <colgroup>
                            <col style="width: *">
                            <col style="width: 100px">
                            <col style="width: 160px">
                        </colgroup>
                        <tr>
                            <th>강좌명</th>
                            <th>진도율</th>
                            <th>최근 학습일</th>
                        </tr>
                        <tr>
                            <td>(44회 영양사) 영양학 이론 및 문제</td>
                            <td class="per_outer"><span class="bar_outer"><span class="bar"></span></span><span class="per">10</span></td>
                            <td>2020-09-20</td>
                        </tr>
                        <tr>
                            <td>(44회 영양사) 생리학 및 생화학 이론 및 문제</td>
                            <td class="per_outer"><span class="bar_outer"><span class="bar"></span></span><span class="per">60</span></td>
                            <td>2020-10-01</td>
                        </tr>
                        <tr>
                            <td>(44회 영양사) 영양교육 및 식품위생관계법규 이론 및 문제	</td>
                            <td class="per_outer"><span class="bar_outer"><span class="bar"></span></span><span class="per">90</span></td>
                            <td>2020-10-20</td>
                        </tr>
                    </table>
                </li>
                <li>
                    <div class="study_info">
                        <h4>
                            영양사 - [44회 영양사 합격] 이론 및 문제완성반
                            <span class="study_info_sub">모바일</span>
                        </h4>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <table class="study_info_table">
                        <colgroup>
                            <col style="width: *">
                            <col style="width: 100px">
                            <col style="width: 160px">
                        </colgroup>
                        <tr>
                            <th>강좌명</th>
                            <th>진도율</th>
                            <th>최근 학습일</th>
                        </tr>
                        <tr>
                            <td>(44회 영양사) 영양학 이론 및 문제</td>
                            <td class="per_outer"><span class="bar_outer"><span class="bar"></span></span><span class="per">10</span></td>
                            <td>2020-09-20</td>
                        </tr>
                        <tr>
                            <td>(44회 영양사) 생리학 및 생화학 이론 및 문제</td>
                            <td class="per_outer"><span class="bar_outer"><span class="bar"></span></span><span class="per">60</span></td>
                            <td>2020-10-01</td>
                        </tr>
                        <tr>
                            <td>(44회 영양사) 영양교육 및 식품위생관계법규 이론 및 문제	</td>
                            <td class="per_outer"><span class="bar_outer"><span class="bar"></span></span><span class="per">90</span></td>
                            <td>2020-10-20</td>
                        </tr>
                    </table>
                </li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){

    $('.fas').click(function(){
        $(this).parent().next().toggle();
            $($(this).parent().next().find(".per_outer")).each(function(){
        
                var $bar = $(this).find(".bar");
                var $val = $(this).find(".per");
                var perc = parseInt( $val.text(), 10);

                $({p:0}).animate({p:perc}, {
                    duration: 1000,
                    easing: "swing",
                    step: function(p) {
                    $bar.css({
                        width: p+"px",
                    });
                    $val.text(p|0);
                    }
                });
            });
    }); 
});
</script>
@include('inc/footer')