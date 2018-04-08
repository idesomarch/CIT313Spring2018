<?php

class HomeController extends Controller{

	public function index(){
		$feed = "http://fox59.com/feed";
		$rss = new RssDisplay($feed);

		$feed_data = $rss->getFeedItems();
		#Channel Title
			$channel_title = $feed_data->channel->title;
			$this->set('rss_title', $channel_title);

			#Item Title
			$item = $feed_data->channel->item->title;
			$this->set('item', $item);

			#link
			$link = $feed_data->channel->item->link;
			$this->set('link', $link);

			#date
			$pubDate = $feed_data->channel->item->pubDate;
			$this->set('pubDate', $pubDate);

			#description
			$description = $feed_data->channel->item->description;
			$this->set('description', $description);
	}

}

?>
