@extends('layouts.admin')

@section('content')
 <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">MOBE Web Builder <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 6 pending letter</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Project 1
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Digital Marketing</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Logo Designing</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="theme/admin/img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="theme/admin/img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="theme/admin/img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="theme/admin/img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <!-- 
                         <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="profile-ava">
                                    <img alt="" src="theme/admin/img/avatar1_small.jpg">
                                </span>

                                 @if (Auth::guest())
                                  <span class="username">{{$name}}</span>
                                  @else
                                   <span class="username">{!! Auth::user()->name !!}</span>
                                 @endif
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <li class="eborder-top">
                                    <a href="#"><i class="icon_profile"></i> My Profile</a>
                                </li>
                                <li>
                                    <a href="{{ url('/logout') }}"><i class="icon_key_alt"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>
                    -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <a href="{{ url('/logout') }}"><i class="icon_key_alt"></i> Log Out</a>
                        </a>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
      <script type="text/javascript">
           function toggle_visibility(id) {
               var e = document.getElementById(id);
               if(e.style.display == 'block')
                  e.style.display = 'none';
               else
                  e.style.display = 'block';
           }
        </script>
      <!-- <script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script> -->
      <script type="text/javascript" src="ckeditor/ckeditor.js" ></script>

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Form</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="#" onclick="toggle_visibility('myeditor');">Form Editor</a></li>                          
                      </ul>
                  </li>       
                  
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Page</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class=""  href="#"  onclick="toggle_visibility('mypage');">Page Editor</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
              <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>                          
                    </ol>
                </div>
              </div>
              <div class="row">
               
                <div id="myeditor" class="col-lg-8" style="display:none;">
                    <form action="publish.php" method="POST" target="_blank">
                       <div class="grid-container">http://javascripttech.com/demo/wp-content/plugins/fluxlive/assets/frontend3.jpg
                            <div class="grid-width-100">
                                <textarea id="editor" name="editor"></textarea>
                                <script>
                                    CKEDITOR.replace('editor');
                                    CKEDITOR.config.height = 400;
                                </script>
                            </div>
                        </div>
                       
                            <br>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Publish</button> 
                            </div>
                        
                    </form>  
                </div>

                <div id="mypage" class="col-lg-8" style="display:none;">
                    <div class="columns">
        <div class="editor">
            <div cols="10" id="editor1" name="editor1" rows="10"  contenteditable="true">
                <h1>List of people to get invitations on the webminar</h1>
                <h3>Technical Announcement</h3>
                <p>Hi [?]</p>
                <p>We hereby have the pleasure to invite you to our webminar. As every year, the event will be hosted in <em>The Wonderland</em> by <span class="h-card"><a class="p-name u-email" href="mailto:alice@example.com">Alice</a> <span class="p-tel">+20 4345 234 235</span></span>and
                    starts tomorrow at 8:00 GMT.</p>
                <h3>Speakers and Agenda</h3>
                <p>TBA.</p>
                <h3>Venue</h3>
                <p>For detailed information, please contact <span class="h-card"><a class="p-name u-email" href="mailto:h.finn@example.com">Huckleberry Finn</a> <span class="p-tel">+48 1345 234 235</span></span>.</p>
                <h3>Accommodation</h3>
                <p>Many thanks to <span class="h-card"><a class="p-name u-email" href="mailto:r.crusoe@example.com">Robinson Crusoe</a> <span class="p-tel">+45 2345 234 235</span></span>who kindly offered his island to the guests of the annual meeting.</p>
                <hr>
                <p style="text-align: right;"><span class="h-card"><a class="p-name u-email" href="mailto:lrrh@example.com">Little Red Riding Hood</a> <span class="p-tel">+45 2345 234 235</span></span>
                </p>
            </div>
        </div>
        <div class="contacts">
            <h3>List of Droppable Contacts</h3>
            <ul id="contactList">
                <li>
                    <div class="contact h-card" data-contact="0" draggable="true" tabindex="0">
                        <img src="http://sdk.ckeditor.com/samples/assets/draganddrop/img/hfin.png" alt="avatar" class="u-photo">Huckleberry Finn</div>
                </li>
                <li>
                    <div class="contact h-card" data-contact="1" draggable="true" tabindex="0">
                        <img src="http://sdk.ckeditor.com/samples/assets/draganddrop/img/dartagnan.png" alt="avatar" class="u-photo">D'Artagnan</div>
                </li>
                <li>
                    <div class="contact h-card" data-contact="2" draggable="true" tabindex="0">
                        <img src="http://sdk.ckeditor.com/samples/assets/draganddrop/img/pfog.png" alt="avatar" class="u-photo">Phileas Fogg</div>
                </li>
                <li>
                    <div class="contact h-card" data-contact="3" draggable="true" tabindex="0">
                        <img src="http://sdk.ckeditor.com/samples/assets/draganddrop/img/alice.png" alt="avatar" class="u-photo">Alice</div>
                </li>
                <li>
                    <div class="contact h-card" data-contact="4" draggable="true" tabindex="0">
                        <img src="http://sdk.ckeditor.com/samples/assets/draganddrop/img/lrrh.png" alt="avatar" class="u-photo">Little Red Riding Hood</div>
                </li>
                <li>
                    <div class="contact h-card" data-contact="5" draggable="true" tabindex="0">
                        <img src="http://sdk.ckeditor.com/samples/assets/draganddrop/img/winetou.png" alt="avatar" class="u-photo">Winnetou</div>
                </li>
                <li>
                    <div class="contact h-card" data-contact="6" draggable="true" tabindex="0">
                        <img src="http://sdk.ckeditor.com/samples/assets/draganddrop/img/edantes.png" alt="avatar" class="u-photo">Edmond Dantès</div>
                </li>
                <li>
                    <div class="contact h-card" data-contact="7" draggable="true" tabindex="0">
                        <img src="http://sdk.ckeditor.com/samples/assets/draganddrop/img/rcrusoe.png" alt="avatar" class="u-photo">Robinson Crusoe</div>
                </li>
            </ul>
        </div>
    </div>

    <script>
        'use strict';

        var CONTACTS = [
            { name: 'Huckleberry Finn',         tel: '+48 1345 234 235', email: 'h.finn@example.com', avatar: 'hfin' },
            { name: 'D\'Artagnan',              tel: '+45 2345 234 235', email: 'dartagnan@example.com', avatar: 'dartagnan' },
            { name: 'Phileas Fogg',             tel: '+44 3345 234 235', email: 'p.fogg@example.com', avatar: 'pfog' },
            { name: 'Alice',                    tel: '+20 4345 234 235', email: 'alice@example.com', avatar: 'alice' },
            { name: 'Little Red Riding Hood',   tel: '+45 2345 234 235', email: 'lrrh@example.com', avatar: 'lrrh' },
            { name: 'Winnetou',                 tel: '+44 3345 234 235', email: 'winnetou@example.com', avatar: 'winetou' },
            { name: 'Edmond Dantès',            tel: '+20 4345 234 235', email: 'count@example.com', avatar: 'edantes' },
            { name: 'Robinson Crusoe',          tel: '+45 2345 234 235', email: 'r.crusoe@example.com', avatar: 'rcrusoe' }
        ];

        CKEDITOR.disableAutoInline = true;

        // Implements a simple widget that represents contact details (see http://microformats.org/wiki/h-card).
        CKEDITOR.plugins.add( 'hcard', {
            requires: 'widget',

            init: function( editor ) {
                editor.widgets.add( 'hcard', {
                    allowedContent: 'span(!h-card); a[href](!u-email,!p-name); span(!p-tel)',
                    requiredContent: 'span(h-card)',
                    pathName: 'hcard',

                    upcast: function( el ) {
                        return el.name == 'span' && el.hasClass( 'h-card' );
                    }
                } );

                // This feature does not have a button, so it needs to be registered manually.
                editor.addFeature( editor.widgets.registered.hcard );

                // Handle dropping a contact by transforming the contact object into HTML.
                // Note: All pasted and dropped content is handled in one event - editor#paste.
                editor.on( 'paste', function( evt ) {
                    var contact = evt.data.dataTransfer.getData( 'contact' );
                    if ( !contact ) {
                        return;
                    }

                    evt.data.dataValue =
                        '' +
                            '' + contact.name + '' +
                            ' ' +
                            '' + contact.tel + '' +
                        '';
                } );
            }
        } );

        // When an item in the contact list is dragged, copy its data into drag and drop data transfer.
        // This data is later read by the editor#paste listener in the hcard plugin defined above.
        CKEDITOR.document.getById( 'contactList' ).on( 'dragstart', function( evt ) {
            // The target may be some element inside the draggable div (e.g. the image), so get the div.h-card.
            var target = evt.data.getTarget().getAscendant( 'div', true );

            // Initialization of CKEditor data transfer facade is a necessary step to extend and unify native 
            // browser capabilities. For instance, Internet Explorer does not support any other data type than 'text' and 'URL'.
            // Note: evt is an instance of CKEDITOR.dom.event, not a native event.
            CKEDITOR.plugins.clipboard.initDragDataTransfer( evt );

            var dataTransfer = evt.data.dataTransfer;

            // Pass an object with contact details. Based on it, the editor#paste listener in the hcard plugin
            // will create HTML to be inserted into the editor. We could set text/html here as well, but:
            // * It is a more elegant and logical solution that this logic is kept in the hcard plugin.
            // * We do not know now where the content will be dropped and the HTML to be inserted
            // might vary depending on the drop target.
            dataTransfer.setData( 'contact', CONTACTS[ target.data( 'contact' ) ] );

            // We need to set some normal data types to backup values for two reasons:
            // * In some browsers this is necessary to enable drag and drop into text in editor.
            // * The content may be dropped in another place than the editor.
            dataTransfer.setData( 'text/html', target.getText() );

            // You can still access and use the native dataTransfer - e.g. to set the drag image.
            // Note: IEs do not support this method... :(.
            if ( dataTransfer.$.setDragImage ) {
                dataTransfer.$.setDragImage( target.findOne( 'img' ).$, 0, 0 );
            }
        } );

        // Initialize the editor with the hcard plugin.
        CKEDITOR.inline( 'editor1', {
            extraPlugins: 'hcard,sourcedialog,justify'
        } );
    </script>
          
                </div>

              </div>
              
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

   
@endsection
