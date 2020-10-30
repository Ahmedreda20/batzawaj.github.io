 <?php
// session_start();
include "layout/header.php";
// session_destroy();
?>        <div class="container">
        <div class="row d-flex mt-5 align-items-center mb-img-txt">
            <div class="col-lg-8 col-md-12  text-right mb-order-above">
                <h1 class="title">لعبة شخصيات الأزواج</h1>
                <h2 class="sub-title">أي نوع من الأزواج أنت؟</h2>
                <div class="custom-select-container">
                <select id="gender" class="mt-3 gender-select" dir="rtl">
                    <option selected="">اختر جنسك لنبدأ الاختبار</option>
                    <option value="female" dir="rtl">أنا امرأة </option>
                    <option value="male" dir="rtl">أنا رجل </option>
                </select>
            </div>

            </div>

            <div class="col-lg-4 col-md-12 mb-order-below">
                <img src="./img/profile_img.png" alt="pic">
            </div>
        </div>
        <form action="./check.php" method="POST" id="answer">
        <!-- first template -->
        <div class="row">
            <div class="col-lg-8  qa">
                <div>
                    <h2 class="q-title" dir="rtl"><span class="title_num">1.</span> إذا بتسافرين سفرة مع زوجك، وين بتروحون؟</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="radio-item">
                            <input type="radio" id="ritema" name="ritem1" value="a3" required="">
                            <label for="ritema">أي مكان رومانسي أهم شي ما يفارق عيوني.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritemb" name="ritem1" value="a4" required="">
                            <label for="ritemb">أي مكان فيه نت  G5 عشان يلحق مع الستوريات اللي بنزلها.</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="radio-item">
                            <input type="radio" id="ritemc" name="ritem1" value="a1" required="">
                            <label for="ritemc">ديرة فيها أكل رهيييب.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritemd" name="ritem1" value="a2" required="">
                            <label for="ritemd">أي مكان فيه مدينة ملاهي أو كوميكون (Comic Con).</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end first template -->
        <!-- second template -->
        <div class="row mt-3">
            <div class="col-lg-8 qa">
                <div>
                    <h2 class="q-title" dir="rtl"><span class="title_num">2.</span> 	إنتي وزوجك ساكتين طول القعدة، شنو شعورج؟</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="radio-item">
                            <input type="radio" id="ritem1" name="ritem2" value="a5" required="">
                            <label for="ritem1">الهدية الغالية اللي بإيده اتحجي، فمو مهم.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem2" name="ritem2" value="a6" required="">
                            <label for="ritem2">عادي مو لازم طول الوقت نسولف، أريح.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem3" name="ritem2" value="a1" required="">
                            <label for="ritem3">أظن إنه يوعان مثلي.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem4" name="ritem2" value="a2" required="">
                            <label for="ritem4">نووووب!!! (!!!NEWB)</label>
                        </div>
                    </div>
                </div>
            </div></div>
        <!-- end second template -->
        <!-- third -->
        <div class="row mt-3">
            <div class="col-lg-8 qa">
                <div>
                    <h2 class="q-title" dir="rtl"><span class="title_num">3.</span> هل راح تستمتعين بالويكند بروحج بدون زوجك؟</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="radio-item">
                            <input type="radio" id="ritem5" name="ritem3" value="a5" required="">
                            <label for="ritem5">راح أزعل عشان يشتري لي حبيبي شي يراضيني فيه.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem6" name="ritem3" value="a6" required="">
                            <label for="ritem6">راح استمتع بالوقت بروحي، لأن بهذا الوقت راح أصير على طبيعتي.</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="radio-item">
                            <input type="radio" id="ritem7" name="ritem3" value="a3" required="">
                            <label for="ritem7">حيييل، وأخيراً خذيت فجه!</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem8" name="ritem3" value="a4" required="">
                            <label for="ritem8">عادي، راح أقضيها تصوير وأنزل بالسوشال ميديا.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- forth -->
       <div class="row mt-3">
            <div class="col-lg-8 qa">
                <div>
                    <h2 class="q-title" dir="rtl"><span class="title_num">4.</span> شنو أحلى هدية ممكن توصل لك من زوجك؟</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="radio-item">
                            <input type="radio" id="ritem9" name="ritem4" value="a1" required="">
                            <label for="ritem9">مطعم 3 نجوم مشلن (Michelin).</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem10" name="ritem4" value="a2" required="">
                            <label for="ritem10">أكس بوكس اليديدة.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem11" name="ritem4" value="a3" required="">
                            <label for="ritem11">طاعتي العمياء.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem12" name="ritem4" value="a4" required="">
                            <label for="ritem12">قناتي الخاصة على اليوتيوب.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- fifth -->
        <div class="row mt-3">
            <div class="col-lg-8 qa">
                <div>
                    <h2 class="q-title" dir="rtl"><span class="title_num">5.</span> شلون يوصفونكم الناس كزوجين؟</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="radio-item">
                            <input type="radio" id="ritem13" name="ritem5" value="a1" required="">
                            <label for="ritem13">علاقتنا مثل القيمر والعسل.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem14" name="ritem5" value="a2" required="">
                            <label for="ritem14">من عشاق التحدي واللعب.</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="radio-item">
                            <input type="radio" id="ritem15" name="ritem5" value="a5" required="">
                            <label for="ritem15">وناسته من وناستي.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem16" name="ritem5" value="a6">
                            <label for="ritem16">ما أتوقع فيه أحد عنده فكرة عن علاقتنا.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- sixth -->
        <div class="row mt-3">
            <div class="col-lg-8 qa">
                <div>
                    <h2 class="q-title" dir="rtl"><span class="title_num">6.</span> هل تاخذين راي زوجك في مظهرك؟</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="radio-item">
                            <input type="radio" id="ritem17" name="ritem6" value="a5" required="">
                            <label for="ritem17">صرفت وايد على اللوك مالي، على الأقل يسمعني كلمتين حلوين.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem18" name="ritem6" value="a6" required="">
                            <label for="ritem18">لا، شكلي نفسه كل يوم ما يتغير.</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="radio-item">
                            <input type="radio" id="ritem19" name="ritem6" value="a3" required="">
                            <label for="ritem19">لا، عندي منظرة.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem20" name="ritem6" value="a4" required="">
                            <label for="ritem20">طبعاً، لازم أكون ولا غلطة قبل ما أنزل صور بإنستا.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- seventh -->
        <div class="row mt-3">
            <div class="col-lg-8 qa">
                <div>
                    <h2 class="q-title" dir="rtl"><span class="title_num">7.</span> شنو من هالأشياء الأكثر رومانسية ممكن تسوينه؟</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="radio-item">
                            <input type="radio" id="ritem21" name="ritem7" value="a1" required="">
                            <label for="ritem21">عشا رومانسي مع شموع.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem22" name="ritem7" value="a2" required="">
                            <label for="ritem22">أهدي له اشتراك نتفلكس مدى الحياة.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem23" name="ritem7" value="a3" required="">
                            <label for="ritem23">أراضيه ببوكيه ورد عن شي ضايقته فيه.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem24" name="ritem7" value="a4" required="">
                            <label for="ritem24">أحلى عيد حب مع أحلى بوستات.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- eighth -->
        <div class="row mt-3">
            <div class="col-lg-8 qa">
                <div>
                    <h2 class="q-title" dir="rtl"><span class="title_num">8.</span> زوجك ترقى لمنصب كبير، شنو الشي اللي ممكن تكافئينه فيه؟</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="radio-item">
                            <input type="radio" id="ritem25" name="ritem8" value="a5" required="">
                            <label for="ritem25">حفلة على شرفه وسيارة يديدة مع ساعة وسفرة أسبوع.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem26" name="ritem8" value="a6" required="">
                            <label for="ritem26">بوكيه ورد يوصل لمكتبه.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem27" name="ritem8" value="a1" required="">
                            <label for="ritem27">بعزم الأهل كلهم على بوفيه أسطوري.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem28" name="ritem8" value="a2" required="">
                            <label for="ritem28">أهديه لعبة نينتندو ليمتد ايديشن.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- nineth -->
        <div class="row mt-3">
            <div class="col-lg-8 qa">
                <div>
                    <h2 class="q-title" dir="rtl"><span class="title_num">9.</span> لما يتصل عليج زوجك وقت الدوام عن شنو بيكون الاتصال؟</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="radio-item">
                            <input type="radio" id="ritem29" name="ritem9" value="a3" required="">
                            <label for="ritem29">سالفة عن الموظفين بالدوام وشكثر دوامه يغث.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem30" name="ritem9" value="a4" required="">
                            <label for="ritem30">شكثر وصلت الفيوز ملوته بتيك توك.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem31" name="ritem9" value="a5" required="">
                            <label for="ritem31">موعدنا بالسباب.</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritem32" name="ritem9" value="a6" required="">
                            <label for="ritem32">أغراض من الجمعية.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-8 col-md text-center"><h2 class="error-message" dir="rtl">ملاحظة: أجب على جميع الأسئلة.</h2></div>
            <div class="col-lg-8 col-md text-center">
                <button type="button" class="btn btn-success mt-3 btn-second-success">التالي</button>
            </div>
        </div>
        </form>
    </div>
<?php
include 'layout/footer.php';
?>