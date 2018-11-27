<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tours and tourism">
    <meta name="author" content="zrshishir.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Travel</title>
    <!-- core CSS -->
    <link href="{{ asset('plugins/pricing/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- toastr -->
    <link href="{{ asset('/css/toastr.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/pricing/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/pricing/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/pricing/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/pricing/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/pricing/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/pricing/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/pricing/css/responsive.css') }}" rel="stylesheet">
    <!-- vuejs and vuetifyjs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui"> -->
    <!--[if lt IE 9]>
    <script src="{{ asset('plugins/pricing/js/html5shiv.js') }}"></script>
    <script src="{{ asset('plugins/pricing/js/respond.min.js') }}"></script>
    <![endif]-->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('plugins/pricing/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('plugins/pricing/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('plugins/pricing/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body id="home" class="homepage">

<header id="header">
    <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
<!--                 <img style="height: 65px;" class="img-responsive" src="{{ asset('plugins/pricing/images/xCoder.jpeg') }}" alt="logo"> -->
                @if(isset($logo))
                    <p>
                        {!! $logo !!}
                    </p>
                @else 
                    <h3>Travel</h3>
                @endif
                </a>

            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll active"><a href="{{ url('/') }}">Home</a></li>
                    <li class="scroll"><a href="#get-in-touch">Contact</a></li>
                    <li class="scroll"><a href="{{url('login')}}">{{ trans('auth.log_in') }}</a></li>
                    <li class="scroll"><a href="{{url('register')}}">{{ trans('auth.Register') }}</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->

    <div class="container" id="app">
        <div class="col-md-2">2</div>
        <div class="col-md-8">
            <div class="row input-group">
                <textarea class="form-control" placeholder="share your experience" name="status" id="status" cols="90" rows="5" v-model="postingStatus"></textarea>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02" v-bind="postingImage">
                    <button class="btn btn-small btn-primary" type="button" v-on:click="postData">Post Now</button>
                </div>
            </div>

            <div class="row media">
                <div class="col-md-2">
                    <img class="align-self-start mr-3" src="{{ url('img/avatar.png') }}" alt="Generic placeholder image" height="64px" width="64px">
                </div>
                
                <div class="col-md-10 media-body">
                    <h5 class="mt-0">Top-aligned media</h5>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                    <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <button type="button" class="btn btn-small btn-primary" disabled>like</button>
                    <button type="button" class="btn btn-secondary btn-small" disabled>comment</button>
                    <br/>
                    <br/>
                    <!-- comment section -->
                    <div class="row">
                        <div class="row media">
                            <div class="col-md-1">
                                <img class="align-self-start mr-3" src="{{ url('img/avatar.png') }}" alt="Generic placeholder image" height="32px" width="32px">
                            </div>
                            <div class="col-md-11 media-body">
                                <h5 class="mt-0">Top-aligned media</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <button type="button" class="btn btn-small btn-primary" disabled>like</button>
                                <button type="button" class="btn btn-secondary btn-small" disabled>reply</button>
                                <br/>
                            </div>
                        </div>
                        <br/>
                        <textarea class="form-control" placeholder="share your experience" name="status" id="status" cols="60" rows="1"></textarea>
                        <button class="btn btn-small btn-primary" type="button">Post</button>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-2">2</div>
    </div><!--/#pricing-->

<script>

    new Vue({
        el: '#app',
        data() {
            return {
                postingStatus: '',
                postingImage: ''
            }
        }
        // data() {
        //     return {
        //         postingStatus: '',
        //         postingImage: '',
        //         comments: [],
        //         commentreplies: [],
        //         comments: 0,
        //         commentBoxs: [],
        //         message: null,
        //         replyCommentBoxs: [],
        //         commentsData: [],
        //         viewcomment: [],
        //         show: [],
        //         spamCommentsReply: [],
        //         spamComments: [],
        //         errorComment: null,
        //         errorReply: null,
        //         user: window.user
        //     }
        // },

        http: {
            headers: {
                'X-CSRF-TOKEN': window.csrf
            }
        },

        methods: {
            postData(){
                console.log(this.postingStatus);
            },
            // fetchComments() {
            //     axios.get('comments/' + this.commentUrl).then(res => {
            //         this.commentData = res.data;
            //         this.commentsData = _.orderBy(res.data, ['votes'], ['desc']);
            //         this.comments = 1;
            //     });
            // },

            // showComments(index) {
            //     if (!this.viewcomment[index]) {
            //         Vue.set(this.show, index, "hide");
            //         Vue.set(this.viewcomment, index, 1);
            //     } else {
            //         Vue.set(this.show, index, "view");
            //         Vue.set(this.viewcomment, index, 0);
            //     }
            // },

            // openComment(index) {
            //     if (this.user) {
            //         if (this.commentBoxs[index]) {
            //             Vue.set(this.commentBoxs, index, 0);
            //         } else {
            //             Vue.set(this.commentBoxs, index, 1);
            //         }
            //     }
            // },

            // replyCommentBox(index) {
            //     if (this.user) {
            //         if (this.replyCommentBoxs[index]) {
            //             Vue.set(this.replyCommentBoxs, index, 0);
            //         } else {
            //             Vue.set(this.replyCommentBoxs, index, 1);
            //         }
            //     }
            // },

            // saveComment() {
            //     if (this.message != null && this.message != ' ') {
            //         this.errorComment = null;
            //         axios.post('comments', {
            //             page_id: this.commentUrl,
            //             comment: this.message,
            //             users_id: this.user.id
            //         }).then(res => {
            //             if (res.data.status) {
            //                 this.commentsData.push({ "commentid": res.data.commentId, "name": this.user.name, "comment": this.message, "votes": 0, "reply": 0, "replies": [] });
            //                 this.message = null;
            //             }
            //         });
            //     } else {
            //         this.errorComment = "Please enter a comment to save";
            //     }
            // },

            // replyComment(commentId, index) {
            //     if (this.message != null && this.message != ' ') {
            //         this.errorReply = null;
            //         axios.post('comments', {
            //             comment: this.message,
            //             users_id: this.user.id,
            //             reply_id: commentId
            //         }).then(res => {
            //             if (res.data.status) {
            //                 if (!this.commentsData[index].reply) {
            //                     this.commentsData[index].replies.push({ "commentid": res.data.commentId, "name": this.user.name, "comment": this.message, "votes": 0 });
            //                     this.commentsData[index].reply = 1;
            //                     Vue.set(this.replyCommentBoxs, index, 0);
            //                     Vue.set(this.commentBoxs, index, 0);
            //                 } else {
            //                     this.commentsData[index].replies.push({ "commentid": res.data.commentId, "name": this.user.name, "comment": this.message, "votes": 0 });
            //                     Vue.set(this.replyCommentBoxs, index, 0);
            //                     Vue.set(this.commentBoxs, index, 0);
            //                 }
            //                 this.message = null;
            //             }
            //         });
            //     } else {
            //         this.errorReply = "Please enter a comment to save";
            //     }
            // },

            // voteComment(commentId, commentType, index, index2, voteType) {
            //     if (this.user) {
            //         axios.post('comments/' + commentId + '/vote', {
            //             users_id: this.user.id,
            //             vote: voteType
            //         }).then(res => {
            //             if (res.data) {
            //                 if (commentType == 'directcomment') {
            //                     if (voteType == 'up') {
            //                         this.commentsData[index].votes++;
            //                     } else if (voteType == 'down') {
            //                         this.commentsData[index].votes--;
            //                     }
            //                 } else if (commentType == 'replycomment') {
            //                     if (voteType == 'up') {
            //                         this.commentsData[index].replies[index2].votes++;
            //                     } else if (voteType == 'down') {
            //                         this.commentsData[index].replies[index2].votes--;
            //                     }
            //                 }
            //             }
            //         });
            //     }
            // },

            // spamComment(commentId, commentType, index, index2) {
            //     console.log("spam here");
            //     if (this.user) {
            //         axios.post('comments/' + commentId + '/spam', {
            //             users_id: this.user.id,
            //         }).then(res => {
            //             if (commentType == 'directcomment') {
            //                 Vue.set(this.spamComments, index, 1);
            //                 Vue.set(this.viewcomment, index, 1);
            //             } else if (commentType == 'replycomment') {
            //                 Vue.set(this.spamCommentsReply, index2, 1);
            //             }
            //         });
            //     }
            // },
        },

        mounted() {
            console.log("mounted");
            // this.fetchComments();
        }
    })
</script>

<script>
    function show_redeem_coupon(that, e, field_id) {
        e.preventDefault();

        if($('#'+field_id).is(':visible')) {
            $(that).text("{{ trans('common.redeem'). ' ' .trans('common.coupon') }}");
            $('#'+field_id).hide('slow');
        } else {
            $(that).text("{{ trans('common.remove'). ' ' .trans('common.coupon') }}");
            $('#'+field_id).show('slow');
        }
    }

    function order(that, e, field_id) {
        e.preventDefault();
        var code = $('#'+ field_id).val();
        var url = $(that).attr('href');
        if(code) {
            url = url + '?code=' + code;
        } 

        window.location.href = url;
    }

</script>


            <?php $alert_type = ''; $msg = ''; ?>
            @if (Session::has('success_msg'))
            <?php $alert_type = 'success';
            $msg = Session::get('success_msg');
            Session::forget('success_msg');
            ?>
            @elseif(Session::has('error_msg'))
            <?php $alert_type = 'error';
            $msg = Session::pull('error_msg');
            ?>
            @elseif(Session::has('info_msg'))
            <?php $alert_type = 'info';
            $msg = Session::pull('info_msg');
            ?>
            @elseif(Session::has('warning_msg'))
            <?php $alert_type = 'warning';
            $msg = Session::pull('warning_msg');
            ?>
            @else
            <?php $alert_type = '';
            $msg = '';
            ?>
            @endif

<script src="{{ elixir('js/app.js') }}"></script>
<script src="{{ asset('plugins/pricing/js/jquery.js') }}"></script>
<script src="{{ asset('plugins/pricing/js/bootstrap.min.js') }}"></script>
<!-- Bootstrap toastr -->
<script src="{{ asset('/js/toastr.min.js') }}" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('plugins/pricing/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('plugins/pricing/js/mousescroll.js') }}"></script>
<script src="{{ asset('plugins/pricing/js/smoothscroll.js') }}"></script>
<script src="{{ asset('plugins/pricing/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('plugins/pricing/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('plugins/pricing/js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('plugins/pricing/js/wow.min.js') }}"></script>
<script src="{{ asset('plugins/pricing/js/main.js') }}"></script>

<script>
    $(function () {
        var alert_type = '<?php echo $alert_type; ?>';
        var msg = '<?php echo $msg; ?>';
        if((alert_type != '') && (msg != '')){
            Command: toastr[alert_type](msg);
            alert_type = '';
            msg = '';
        }
    });
</script>

</body>
</html>