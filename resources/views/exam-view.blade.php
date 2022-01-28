@extends('layouts.exam')

@section('content')
    <header>
        <div class="cont flex-row">
            <img src="{{ asset('img/placeholder-logo.png') }}" alt="Logo PlaceHolder" class="logo">

            <nav class="nav-menu">
                <ul class="menu flex-row">
                    <li class="has-dropdown main-li">
                        <a href="javascript:void(0)" class="menu-link">
                            <img src="{{ asset('img/right-arrow.png') }}" class="arrow-mobile">
                            Industries
                        </a>
                        <ul class="submenu">
                            <img src="{{ asset('img/arrow-left.png') }}" class="arrow close-submenu">
                            <li>
                                <a href="javascript:void(0)" class="menu-link">
                                    <img src="{{ asset('img/right-arrow.png') }}" class="arrow">
                                    Financial Services
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="menu-link">
                                    <img src="{{ asset('img/right-arrow.png') }}" class="arrow">
                                    Healthcare
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="menu-link">
                                    <img src="{{ asset('img/right-arrow.png') }}" class="arrow">
                                    Government
                                </a>
                            </li>
                        </ul>
                    </li>
            
                    <li class="main-li"><a href="javascript:void(0)" class="menu-link"><img src="{{ asset('img/right-arrow.png') }}" class="arrow-mobile">Solutions</a></li>
                    <li class="main-li"><a href="javascript:void(0)" class="menu-link"><img src="{{ asset('img/right-arrow.png') }}" class="arrow-mobile">Enterprise Class AI</a></li>
                    <li class="main-li"><a href="javascript:void(0)" class="menu-link"><img src="{{ asset('img/right-arrow.png') }}" class="arrow-mobile">Knowledge Center</a></li>
                    <li class="main-li"><a href="javascript:void(0)" class="menu-link"><img src="{{ asset('img/right-arrow.png') }}" class="arrow-mobile">Company</a></li>
                  </ul>

                  <div class="demo mobile">
                    <div class="btn-demo">
                        Request a Demo
                    </div>
                </div>
            </nav>

            <div class="icon-search">
                <img src="{{ asset('img/search.png') }}" alt="" class="icon">
            </div>

            <div class="demo desktop">
                <div class="btn-demo">
                    Request a Demo
                </div>
            </div>

            <div class="menu-activador">
				<a href="#">
					<span class="menu-activador-linea"></span>
					<span class="menu-activador-linea"></span>
					<span class="menu-activador-linea"></span>
				</a>
			</div>
        </div>

        <div class="search">
            <div class="cont">
                <input type="text" name="search" id="search" placeholder="Search">
                <img src="{{ asset('img/close.png') }}" alt="" class="close-search">
            </div>
        </div>
        
    </header>
@endsection
