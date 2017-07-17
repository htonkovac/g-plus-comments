<html>
<head>
 <title>My title</title>
 </head>
<body>
 
<?php include_once("analyticstracking.php") ?>
 <h1> Header </h1>
 <script src="https://apis.google.com/js/plusone.js" gapi-processed="true"></script>
                        <div id="comments"></div>
                        <script>
                            gapi.comments.render('comments', {
                                href: window.location,
                                width: '624',
                                first_party_property: 'BLOGGER',
                                view_type: 'FILTERED_POSTMOD'
                            });
                        </script>

</body>
