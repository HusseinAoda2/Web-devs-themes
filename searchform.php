<!-- دالة لاستدعاء رأس الصفحة -->
<?php
get_header();
?>

<form action="<?php /* توجيه البحث للصفحة الرئيسية */ echo home_url('/') ?>" method="get">
    <input class="form-control form-control-sm" name="s">
    <button type="submit" class="btn btn-sm btn-outline-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
            <title>Search</title>
            <circle cx="10.5" cy="10.5" r="7.5" />
            <path d="M21 21l-5.2-5.2" />
        </svg>
    </button>
</form>

<!-- دالة لاستدعاء ذيل الصفحة -->
<?php 
get_footer();
?>
