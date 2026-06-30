<?php include("includes/header.php"); ?>

<section class="hero small">
    <h1>تبرع الآن</h1>
    <p>اختر المشروع وساهم في الخير</p>
</section>

<section class="cards">

<!-- CARD -->
<div class="card donate-card">
    <h3>إطعام العائلات</h3>
    <p>ساعد في توفير وجبات للمحتاجين</p>

    <div class="progress">
        <div class="progress-bar" style="width: 60%"></div>
    </div>
    <p class="amount">60000 دج / 100000 دج</p>

    <button class="btn openModal" data-project="إطعام العائلات">تبرع</button>
</div>

<div class="card donate-card">
    <h3>كفالة يتيم</h3>
    <p>كن سبب في رسم البسمة</p>

    <div class="progress">
        <div class="progress-bar" style="width: 40%"></div>
    </div>
    <p class="amount">40000 دج / 100000 دج</p>

    <button class="btn openModal" data-project="كفالة يتيم">تبرع</button>
</div>

<div class="card donate-card">
    <h3>حفر الآبار</h3>
    <p>ماء = حياة</p>

    <div class="progress">
        <div class="progress-bar" style="width: 80%"></div>
    </div>
    <p class="amount">80000 دج / 100000 دج</p>

    <button class="btn openModal" data-project="حفر الآبار">تبرع</button>
</div>

<div class="card donate-card">
    <h3>بناء المدارس</h3>
    <p>تعليم الأطفال في المناطق الفقيرة</p>

    <div class="progress">
        <div class="progress-bar" style="width: 30%"></div>
    </div>
    <p class="amount">30000 دج / 100000 دج</p>

    <button class="btn openModal" data-project="بناء المدارس">تبرع</button>
</div>

<div class="card donate-card">
    <h3>توزيع الملابس</h3>
    <p>مساعدة العائلات بالملابس الشتوية</p>

    <div class="progress">
        <div class="progress-bar" style="width: 20%"></div>
    </div>
    <p class="amount">20000 دج / 100000 دج</p>

    <button class="btn openModal" data-project="توزيع الملابس">تبرع</button>
</div>

<div class="card donate-card">
    <h3>مساعدات طبية</h3>
    <p>توفير الأدوية والعلاج للمحتاجين</p>

    <div class="progress">
        <div class="progress-bar" style="width: 50%"></div>
    </div>
    <p class="amount">50000 دج / 100000 دج</p>

    <button class="btn openModal" data-project="مساعدات طبية">تبرع</button>
</div>

</section>

<!-- MODAL -->
<div id="donateModal" class="modal">
    <div class="modal-content payment">

        <span class="close">&times;</span>

        <h2 id="projectName">الدفع</h2>

        <input type="text" placeholder="الاسم الكامل">

        <input type="text" placeholder="رقم البطاقة 1234 5678 9012 3456">

        <div class="card-row">
            <input type="text" placeholder="MM/YY">
            <input type="text" placeholder="CVV">
        </div>

        <input type="number" placeholder="المبلغ (دج)">

        <button class="btn pay-btn">إتمام الدفع</button>

    </div>
</div>
<script>
let modal = document.getElementById("donateModal");
let openBtns = document.querySelectorAll(".openModal");
let closeBtn = document.querySelector(".close");
let projectTitle = document.getElementById("projectName");

openBtns.forEach(btn => {
    btn.onclick = () => {
        modal.style.display = "block";

        // اسم المشروع
        let project = btn.getAttribute("data-project");
        projectTitle.innerText = "التبرع لـ: " + project;
    };
});

closeBtn.onclick = () => {
    modal.style.display = "none";
};

window.onclick = (e) => {
    if(e.target == modal){
        modal.style.display = "none";
    }
};
</script>
<?php include("includes/footer.php"); ?>