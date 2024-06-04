<nav class="navbar bg-[#7AA2E3] sticky top-0 z-20">
<div class="flex-1">
    <a class="btn btn-ghost text-xl text-[#ECD7CD]">LearnTogether</a>
</div>
<div class="flex-end">
    <a class="btn btn-ghost text-xl text-[#ECD7CD]"><?php 
    if(isset($_GET['username']) && !empty($_GET['username'])){
    echo "Welcome, ".$_GET['username']."!";
    }else{
        echo 'Tolong masukkan username di query url!!!';
    }

    ?></a>
</div>
</nav>