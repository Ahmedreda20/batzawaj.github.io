<?php
    session_start();
    include "layout/header.php";
    $answer1 = $_SESSION['answer1'];
    $answer2 = $_SESSION['answer2'];
    $answer3 = $_SESSION['answer3'];
    $answer4 = $_SESSION['answer4'];
    $answer5 = $_SESSION['answer5'];
    $answer6 = $_SESSION['answer6'];
    // echo $answer1."<br>";
    // echo $answer2."<br>";
    // echo $answer3."<br>";
    // echo $answer4."<br>";
    // echo $answer5."<br>";
    // echo $answer6."<br>";
// if same value exist
    if (isset($_POST['ritem10'])){
        $question10 = $_POST['ritem10'];
        switch($question10){
            case "a1":
                $answer1 = $answer1+1;
                break;
            case "a2":
                $answer2 = $answer2+1;
                break;
            case "a3":
                $answer3 = $answer3+1;
                break;
            case "a4":
                $answer4 = $answer4+1;
                break;
            case "a5":
                $answer5 = $answer5+1;
                break;
            case "a6":
                $answer6 = $answer6+1;
                break;
        }
    }
    // echo "______________________________<br>";
    // echo $answer1."<br>";
    // echo $answer2."<br>";
    // echo $answer3."<br>";
    // echo $answer4."<br>";
    // echo $answer5."<br>";
    // echo $answer6."<br>";
    $result = array($answer1, $answer2, $answer3, $answer4, $answer5, $answer6);
    $original_result = $result;
    rsort($result);
    // echo $result[0];
    $final_result = array_search($result[0], $original_result);
    $final_result++;
    // echo $final_result;
    // result content
    $personality_title1 = "الإكّيلة ";
    $personality_title2 = "الجيمرز ";
    $personality_title3 = "الحب العنيف ";
    $personality_title4 = "المدكورجية ";
    $personality_title5 = "الجميلة والهامور ";
    $personality_title6 = "المتبلعمين ";
    $personality_content1 ='حكمتكم في الحياة هي: "الطريق إلى قلب الرجل، والمرأة بعد ... معدتهم"، التعبير عن الحب بالنسبة لكم يكون بلغة الصحون والنكهات والمطاعم اليديدة، أهم وأحلى غرفة في بيتكم هي المطبخ، قمة الاستمتاع عندكم لما تاكلون أكلة مطبوخة بحب، أو تكتشفون مطعم يديد حده قوي! الجدور والملاليس بالنسبة لكم ألعاب تيمعونها وتهتمون فيها وتؤمنون إن كل شي له علاقة بالأكل هو شيء يفوق الوصف ويستحق كل الحب والتقدير. عواااافي!';
    $personality_content2 = 'الزواج أهوه أعلى سكور حق الجيمريه الفنانين اللي ما خلوا تروفي ما خذوه! الله يعافي خاصية الجات بالجيمز اللي خلتكم تتعرفون على بعض، بس ما نقول لكم إلا فالكم الأبجريد واللفل اليديد، طلعات الكبلز خلها حق المتخلفين أما انتو جهازكم اليديد مَدْخَلكم حق حياتكم الصجية، علاقاتكم الزوجية متواصلة أكثر من أقوى كلان باي مكان، خلوا المتزوجين لاهين بتعقيداتهم وانتو إلهوا بأحلى مغامرة بأحلى DLC. مشاكل زوجيه؟! لا يا حبيبي لا، مشكلتكم الوحيدة شلون تذبحون الرئيس الأخير.';
    $personality_content3 = 'تعبيركم عن الحب يكون بإيدكم وريولكم بكل ما تعنيه الكلمة! الشك والغيرة قاعدة أساسية عندكم، وناطرين الزلة، إذا مر أسبوع ما تهاوشتوا فيه تشكون إن أحد فيكم مريض! تميلون للتحكم ببعضكم البعض، "ماكو روحة شاليه مع ربعك" ، "لا تلبسين هاللون"، "لا تماشي رفيجك فلان"، "ماكو طلعة"! بالنهاية حتى لو الآخرين يشوفون إن هالأشياء سيئة، إنتو داخلياً مرتاحين جذي، وقاعدتكم في الحياة إن "الخلافات هي بهارات الزواج".';
    $personality_content4 = 'أول شي تسوونه لما تقعدون من النوم أهو إنكم تجيكون السوشال ميديا وتشوفون جم لايك؟ جم فولو؟ جم كومنت؟ جم فيو؟ انتو فنانين ورسمتوا أحلى صورة تورونها الناس، عرفتوا تستثمرون بالمظهر الأنيق والذوق الرفيع! ملوك الديكور وكل الهبّات عندكم أول بأول من كافيهات وماركات وسيايير، وقمة الحب عندكم تطقمون انتو الاثنين بنفس الماركة، بالنسبة لكم كل شي يهون في سبيل الكشخة، وإذا حسابكم في البنك ما كفى، الفيزا موجودة! ';
    $personality_content5 = 'أثمن أثنين إلتقوا ببعض أهما انتو! حياتكم عبارة عن حلم كل فقير. عايشين حياتكم بالطول وبالعرض والعلاقة بينكم مليئة بالعطاء والتفاهم، خلافاتكم تنحل بالهدايا!هداياكم لبعض غير، مثل علبة فيها سوار فان كليف داخلها علبة ثانية لمفتاح الرينج هدية بمناسبة عيد ميلاد القطوة اللي كانت هدية ذكرى أول طلعة طلعتوها مع بعض. قاعدتكم في الحياة الجمال انخلق للشوف، والفلوس انخلقت للصرف!';
    $personality_content6 = 'تعرفون أغنية أربع سنين انتطالع بالعيون؟ ترا كاتبينها عنكم! موهبتكم هي التبلعم! ما تعرفون تعبرون عن مشاعركم، وحتى إذا حاولتوا تعبرون، تقولون شي ماله علاقة! ودك تقول لها أحبج، بس بالنهاية وعقب ثلاث أيام تتردد وتقولها: جنه الجو حلو اليوم! ودج تقولين له حبيبي، بس آخر شي ما تعرفين تقولين له إلا: شنو تبي غدا باجر؟ الحب موجود بينكم، وتصرفاتكم وخدودكم الحمرة تدل عليه.';
?>
    <!-- <video src="background.mp4" autoplay loop playsinline muted></video> -->
  <video autoplay loop  id="vid">
        <source src="background.mp4" type="video/mp4">
        <source src="background.ogg" type="video/ogg">
    </video>
<script>
    document.getElementById('vid').play();
</script>
    <div class="second-section" style="background-image: url(&#39;img/bg_grid.png&#39;);">
        <div class="container mb-third-sb">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 third-subscribe">
                    <form autocomplete="on">
                        <input type="text" class="form-control input-align mb-2" dir="rtl" id="fname" name="fname" placeholder="الاسم" required style="padding-bottom: 15px !important;">
                        <div class="single">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-theme" type="submit">اشترك</button>
                                </span>
                                <input type="email" class="form-control" dir="rtl" id="email" name="email" placeholder="البريد الإلكتروني" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 text-right third-txt">
                    <h2 dir="rtl">عرض خاص لمدة أسبوع واحد فقط!</h2>
                    <p dir="rtl">خصم لغاية 65٪ على الإشتراكات!<br>
                        كن أول من يعلم واشترك لمعرفة آخر الأخبار والعروض الترويجية.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center" style="padding: 3% 0;">
            <div class="col-lg-6 col-md-12 text-right third-last-txt">
                <?php 
                    if($final_result==1){
                      echo '<h2 class="title" dir="rtl">'.$personality_title1.'</h2>';  
                      echo '<p dir="rtl" class="sub-text">'.$personality_content1.'</p>';  
                    } 
                    if($final_result==2){
                        echo '<h2 class="title" dir="rtl">'.$personality_title2.'</h2>';
                        echo '<p dir="rtl" class="sub-text">'.$personality_content2.'</p>';  
                    } 
                    if($final_result==3){
                        echo '<h2 class="title" dir="rtl">'.$personality_title3.'</h2>';
                        echo '<p dir="rtl" class="sub-text">'.$personality_content3.'</p>';  
                    } 
                    if($final_result==4){
                        echo '<h2 class="title" dir="rtl">'.$personality_title4.'</h2>';
                        echo '<p dir="rtl" class="sub-text">'.$personality_content4.'</p>';  
                    } 
                    if($final_result==5){
                        echo '<h2 class="title" dir="rtl">'.$personality_title5.'</h2>';
                        echo '<p dir="rtl" class="sub-text">'.$personality_content5.'</p>';
                    } 
                    if($final_result==6){
                        echo '<h2 class="title" dir="rtl">'.$personality_title6.'</h2>';
                        echo '<p dir="rtl" class="sub-text">'.$personality_content6.'</p>';
                    } 
                ?>
                <div class="mb-5">
                    <a href="https://api.whatsapp.com/send?text=https://batzawaj.com" class="btn btn-second-success mt-3 btn-success">ارسل لصديق</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 text-right third-img">
                <?php
                    if($final_result==1) echo '<img src="img/Result-1.svg" alt="">';
                    if($final_result==2) echo '<img src="img/Result-2.svg" alt="">';
                    if($final_result==3) echo '<img src="img/Result-3.svg" alt="">';
                    if($final_result==4) echo '<img src="img/Result-4.svg" alt="">';
                    if($final_result==5) echo '<img src="img/Result-5.svg" alt="">';
                    if($final_result==6) echo '<img src="img/Result-6.svg" alt="">';
                ?>
            </div>
        </div>
    </div>
<?php
    include "layout/footer.php";
?>