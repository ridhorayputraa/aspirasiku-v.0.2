
<h4 class="my-3">Tags</h4>
<div class="border align-center">
    <a href="/" class="nav-link {{ ($active === 'home') ? '' : 'notclick' }}">
        <p>All tags</p>
    </a>
</div>


<div class="border align-center nav-item">

    <a  class="nav-link {{ ($active === 'usulan') ? '' : 'notclick' }}" href="/usulan">
        <p>Usulan</p>
    </a>
</div>
<div class="border align-center nav-item">

    <a href="/pengumuman" class="nav-link {{ $active == 'pengumuman' ? '' : 'notclick' }}">
        Pengumuman
    </a>
</div>
<div class="border align-center nav-item ">

    <a class="nav-link {{ ($active === 'keluhan') ? '' : 'notclick' }}" href="/keluhan">
     Keluhan
    </a>


</div>
