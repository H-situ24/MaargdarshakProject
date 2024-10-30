<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Tabs Example</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <style>
        body {
    font-family: Arial, sans-serif;
}

.tabs {
    margin: 20px;
}

.tab-links {
    list-style: none;
    padding: 0;
}

.tab-links li {
    display: inline;
}

.tab-links li a {
    text-decoration: none;
    padding: 10px 20px;
    background: #f0f0f0;
    border: 1px solid #ccc;
    border-bottom: none;
    margin-right: 5px;
    border-radius: 5px 5px 0 0;
}

.tab-links li.active a {
    background: #fff;
    border-bottom: 1px solid #fff;
}

.tab-content .tab {
    display: none;
}

.tab-content .tab.active {
    display: block;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

    </style>
</head>
<body>
    <div class="tabs">
        <ul class="tab-links">
            <li class="active"><a href="#tab1">Tab 1</a></li>
            <li><a href="#tab2">Tab 2</a></li>
            <li><a href="#tab3">Tab 3</a></li>
        </ul>

        <div class="tab-content">
            <div id="tab1" class="tab active">
                <h2>sittu ji 1</h2>
                <p>lorem10</p>
            </div>
            <div id="tab2" class="tab">
                <h2>shabbir</h2>
                <p>This is the content for Tab 2.</p>
            </div>
            <div id="tab3" class="tab">
                <h2>dinesh ji</h2>
                <p>This is the content for Tab 3.</p>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function() {
    $('.tab-links a').on('click', function(e) {
        e.preventDefault();
        
        var target = $(this).attr('href');

        // Remove active class from all links and tabs
        $('.tab-links li').removeClass('active');
        $('.tab').removeClass('active');

        // Add active class to the clicked link and the corresponding tab
        $(this).parent().addClass('active');
        $(target).addClass('active');
    });
});

</script>
