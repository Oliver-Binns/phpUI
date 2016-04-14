# phpUI
>HTML? Forget it.

You can now get started with phpUI.
HTML is the basis of any website, but with phpUI you can have all your HTML generated automatically for you

Generating a Bootstrap DateTimePicker has never been easier.
Before:
```
?>
<input id='date_picker' class='form-control' type='text' value='06/04/2016' name='start_date' placeholder='Enter a Date'>
<script type='text/javascript'>$(document).ready(function(){$("#date_picker").datetimepicker();});</script>
<?php
```
Now:
```
echo new UIDatePicker('06/04/2016','start_date','Enter a Date');
```

##Advantages of phpUI

* Create large HTML structures with minimal lines of code
* Avoid continuously switching between PHP and HTML
* phpUI code is much more readable than basic HTML, for example, the date picker above
* Produces no-white-space HTML to improve network transfer speeds
* Built in support for commonly used libraries including Bootstrap, select2 and CKEditor
* Built in support to export your phpUI tables to HTML or download as Excel file
* Ability to quickly update all UI objects throughout your site.
* Allows you to pass elegant UI objects rather than messy HTML strings between model and controller classes
* Fully open source

##Usage

* Clone with Git:
```
git clone https://github.com/Oliver-Binns/phpUI.git
```
* Create a new PHP Document.
* Require the phpUI Autoloader
```
require_once 'phpUI/autoloader.php';
```
* Use phpUI Elements as according to the documentation (coming soon)
```
echo new UIPage(
    new UIPageHead(
        'Example phpUI Page',
        [
            CSSObject::libraryLink('bootstrap', '3.3.2'),
            'css/my-bootstrap-theme.min.css'
        ]
    ),
    new UIPageBody(
        [
            //Insert Page Content objects here.
        ],
        [
            JSObject::libraryLink('jquery', '2.2.3'),
            JSObject::libraryLink('bootstrap', '3.3.2')
        ]
    )
);
```
* Your IDE should automatically import the necessary objects for you.
```
use phpHTML\UICore\UIPage\UIPage;
use phpHTML\UICore\UIPage\UIPageBody;
use phpHTML\UICore\UIPage\UIPageHead;
use phpHTML\JSCore\JSObject;
use phpHTML\JSCore\CSSObject;
```
* phpUI generates the HTML for you
```
<!doctype html>
<html lang="en-GB">
    <head>
        <title>Example phpUI Page</title>
        <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' href='css/my-bootstrap-theme.min.css'>
    </head>
    <body>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js'></script>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js'></script>
    </body>
</html>
```

