<?php
    session_start();
    include "layout/header.php";
    // foreach($_SESSION['q_num'] as $question){
    //     echo $question."<br>";
    // }
?>
    <div class="container second-top-img-txt">
        <div class="row d-flex mt-5 align-items-center mb-second-img-txt">
            <div class="col-8  text-right">
                <h1 class="title" >يالله آخر سؤال</h1>
                <h2 class="sub-title">!ويبتدي الضحك</h2>
            </div>
            <div class="col-4 second-pic">
                <img src="img/second_profile.png" alt="pic">
            </div>
        </div>
        <form action="result.php" method="POST">
        <!-- second template -->
        <div class="row mt-3">
            <div class="col-lg-8 col-md qa">
                <div>
                    <h2 class="q-title" dir="rtl"><span class="title_num">10.</span>	إذا رحتوا معرض مزدحم، وين بتكونون؟</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php foreach($_SESSION['q_num'] as $question){?>
                        <?php if ($question == 0){?>    
                        <div class="radio-item">
                            <input type="radio" id="ritem1" name="ritem10" value="a1" required>
                            <label for="ritem1">عند الأكل اللذيذ. </label>
                        </div>
                        <?php }?>
                        <?php if ($question == 1){?>        
                        <div class="radio-item">
                            <input type="radio" id="ritem2" name="ritem10" value="a2">
                            <label for="ritem2">على حسب، هل هذا معرض لألعاب الفيديو؟. </label>
                        </div>
                        <?php }?>  
                        <?php if ($question == 2) {?>      
                        <div class="radio-item">
                            <input type="radio" id="ritem3" name="ritem10" value="a3">
                            <label for="ritem3">بعيد انتناجر مع بعض. </label>
                        </div>
                        <?php }?>    
                        <?php if ($question == 3) { ?>    
                        <div class="radio-item">
                            <input type="radio" id="ritem4" name="ritem10" value="a4">
                            <label for="ritem4">بوسط المعمعة نصور وننزل الصور عشان نحر ربعنا. </label>
                        </div>
                        <?php }?>    
                        <?php if ($question == 4){?>    
                        <div class="radio-item">
                            <input type="radio" id="ritem5" name="ritem10" value="a5">
                            <label for="ritem5">صوب الفي آي بي (VIP) بقلب الحدث . </label>
                        </div>
                        <?php }?>    
                        <?php if ($question == 5){?>    
                        <div class="radio-item">
                            <input type="radio" id="ritem6" name="ritem10" value="a6">
                            <label for="ritem6">نباعد عن الزحمة كثر ما نقدر أو ما نروح من الأساس. </label>
                        </div>
                        <?php }?>    
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end second template -->
        <div class="row mb-5">
            <div class="col-lg-8 col-md text-center">
                <button type="submit"  class="btn btn-success mt-3 btn-second-success">النتيجة</button>
            </div>
        </div>
        </form>
    </div>
<?php
    include "layout/footer.php";
?>