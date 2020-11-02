@include('inc/head')
<div id="section_inner">
    <h2 class="sub_page_title bar gray">
        <?php
            if(isset($_GET['be_type'])){
                $be_type = $_GET['be_type'];
                if($be_type == 'bookstore'){
                    echo '동영상 Q&A';
                }else if($be_type == 'video'){
                    echo '인터넷서점 Q&A';
                }else{
                    echo '1:1 문의';
                }
            }
        ?>
    </h2>
    <div class="member_out">
        <form action="" class="join_form info">
            <ul>
                <li>
                    <div class="all_line">
                        <div class="input_title">이름 </div>
                        <div class="input_box">
                            <input type="text" style="border: 0" value="홍길동" readonly>
                        </div>
                    </div>
                </li>
                <?php
                    if($be_type != 'bookstore' && $be_type != 'video'){
                ?>
                <li>
                    <div class="all_line">
                        <div class="input_title">분류 </div>
                        <div class="input_box">
                            <select name="">
                                <option value="">동영상강의문의</option>
                                <option value="">학원강의문의</option>
                                <option value="">인터넷서점문의</option>
                                <option value="">교재문의</option>
                                <option value="">사이트이용문의</option>
                                <option value="">주문/결제문의</option>
                                <option value="">배송문의</option>
                                <option value="">취소/환불문의</option>
                                <option value="">회원정보문의</option>
                                <option value="">기타문의</option>
                            </select>
                        </div>
                    </div>
                </li>
            <?php } ?>
                <li>
                    <div class="all_line">
                        <div class="input_title">제목 </div>
                        <div class="input_box">
                            <input type="text" class="wd545">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="all_line">
                        <div class="input_title">내용 </div>
                        <div class="input_box">
                            <textarea name=""></textarea>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="write_box">
                <input type="submit" value="등록">
                <a href="#none">목록</a>
            </div>
        </form>
    </div>
</div>
@include('inc/footer')