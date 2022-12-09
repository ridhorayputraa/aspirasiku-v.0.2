
<h4 class="my-3">Tags</h4>
<div class="border align-center">
    <a href="/" class="nav-link {{ ($active === 'home') ? 'click' : 'notclick' }}">
        <p>All tags</p>
    </a>
</div>


<div class="border align-center nav-item">

    <a  class="nav-link {{ ($active === 'usulan') ? 'click' : 'notclick' }}" href="/?category=usulan">
        <p>Usulan</p>
    </a>
</div>
<div class="border align-center nav-item">

    <a href="/?category=pengumuman" class="nav-link {{ ($active == 'pengumuman') ? 'click' : 'notclick' }}">
        Pengumuman
    </a>
</div>
<div class="border align-center nav-item ">

    <a class="nav-link {{ ($active === 'keluhan') ? 'click' : 'notclick' }}" href="/?category=keluhan">
     Keluhan
    </a>


</div>
