<?php
queue_css_file('geolocation-items-map');

$title = __('Browse Items on the Map') . ' ' . __('(%s total)', $totalItems);
echo head(array('title' => $title, 'bodyclass' => 'map browse'));
?>

<h1><?php echo $title; ?></h1>

<nav class="items-nav navigation secondary-nav">
    <?php echo public_nav_items(); ?>
</nav>

<?php
echo item_search_filters();
echo pagination_links();
?>

<div id="geolocation-browse">
  <div style="border-width: 0px 0px 10px 0px;border-color:#07811B;border-style:solid;margin:0px 0px 13px 0px">
    <p style="margin:0px 0px 5px 0px">After World War II, Berea College created a general studies course called
       "Man and the Humanities," in which students studied literature, music, and art.
        One of the first assignments asked students to draw their home community.
        Over the four-decade life of this course, some 7,000 drawings were saved.</p>
    <p style="margin:0px 0px 13px 0px">Because many of the students who came to Berea during these years were from Appalachia,
       these drawings are now primary sources that offer revealing glimpses of Appalachian life
        over the last half of the twentieth century. Mappalachia is an effort to make the drawings
         accessible to scholars, alumni, and the wider public.</p>
  </div>
    <?php echo $this->geolocationMapBrowse('map_browse', array('list' => 'map-links', 'params' => $params)); ?>
    <div id="map-links"><h2 style="margin-bottom:0px"><?php echo __('Find An Item on the Map'); ?></h2></div>
</div>

<?php echo foot(); ?>
