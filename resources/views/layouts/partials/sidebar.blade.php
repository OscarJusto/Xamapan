<div class="btn-left">
    <img alt="bx-menu" id="btn-left" src="imgs/bx-menu-left.svg">
</div>
<aside class="sidebar" id="sidebar"> 
    <div class="logo text">
        <a href="{{ route('xamapa.index') }}"><img alt="logo-Sistemas Productivos Xamapan" src="imgs/loge.png"></a>
        </div>
    {{-- <div class="text"> Xamapan </div>      --}}
    <ul class="one">
        <li><a href="{{ route('xamapa.show') }}">Productos</a></li>
        <li class="active"><a href="#tilapia">Tilapia</a></li>
        <li>
            <a href="#xamapan" class="feat-btn">Xamapan
                <span> <i class='bx bxs-chevron-down first'></i></span>
            </a>
        </li>
            <ul class="feat-show">
                <li><a href="#capacitacion">Capacitación</a></li>
                <li><a href="#investigacion">Investigación</a></li>
                <li><a href="#educacion">Educación</a></li>
                <li><a href="#calendario">Calendario</a></li>
            </ul>        
    </ul>            
</aside>