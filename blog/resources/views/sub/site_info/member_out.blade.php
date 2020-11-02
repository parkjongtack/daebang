@include('inc/head')
<div id="section_inner">
    <h2 class="sub_page_title bar gray">회원탈퇴</h2>
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
                {{-- <li>
                    <div class="all_line">
                        <div class="input_title">분류 </div>
                        <div class="input_box">
                            <select name="">

                            </select>
                        </div>
                    </div>
                </li> --}}
                <li>
                    <div class="all_line">
                        <div class="input_title">제목 </div>
                        <div class="input_box">
                            <input type="text">
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