<!DOCTYPE html>
<html>
	<head>
		<title>Intro to Holdem</title>
		<!-- CSS -->
		<link href="../css/process.css" rel="stylesheet">
	</head>
	<body>
		<div>
			<table id="links">
				<tr>
					<td><a href="../index.html">Home</a></td>
	                <td><a href="holdem.php">Intro to Holdem</a></td>
					<td><a href="process.php">Process</a></td>
	                <td><a href="project.php">Project</a></td>
	            </tr>
			</table>
		</div>
		<h1 id="process">Process</h1>
		</br>
		<h2 class="description_header">[ Overview and Motivation ]</h2>
		<ul class="description_body">
			<li>All of the members on our team are interested in poker playing. Online, it can be difficult to understand what information is credible because popular opinion is fickle and subject to biases, like crowd logic. Therefore, we wanted to try and understand how we could play better poker through doing our own analysis. Our project breaks down our data by table size and seeks to see how different playing stratagies affected tables of varying sizes. Table size has a significant effect on strategy because one is much more likely to have the best hand at a given table if there are less people there than if there are more. Furthermore, some of our initial questions include:
			</br></br>
			<ul class="description_sub_body">
				<li>How important is your position in poker in terms of you expected profit per hand?</li>
				<li>Is it profitable to continuation bet and three bet preflop? How profitable?</li>
				<li>We can calculate the probabilities that each hand wins. But given that people play suboptimally, what are the most profitable hands?</li>
				<li>Are there certain playing styles that people adopt, and are these styles easily observable in the players' betting patterns? Is one style significantly more profitable than another?</li>
			</ul>
			</li>
		</ul>
		<h2 class="description_header">[ Data Discovery and Wrangling ]</h2>
		<ul class="description_body">
			<li>We knew we needed a large dataset that contained a lot of specific poker information (e.g. how many people were at the table for a given hand, what the pot size was, what cards every player had) so we searched online for a few hours. Eventually, we stumbled across <a href="http://poker.cs.ualberta.ca/irc_poker_database.html">this</a> website which had a massive IRC poker database. This dataset was ideal because it provided the following data for thousands of players:
			</br></br>
			<ul class="description_sub_body">
				<li>hroster.txt: This file contains roster information. Each record in this file corresponds to a hand containing a unique timestamp, the number of players dealt cards, and the nicknames of the players.</li>
				<li>hdb.txt: This file contains detailed hand information for every player in every round. This includes a unique timestamp, the hand number, the number of players left in each round of betting, the size of the pot, and which cards appeared on each flop.</li>
				<li>pdb.*: These files contian detailed hand information for a specific player in certain round. This includes the player nickname, a unique timestamp, their betting action in each round of betting (e.g. raise, fold, etc.), the cards they had, their winnings, and what their bankroll is</li>
			</ul>
			</li>
		</ul>
		<h2 class="description_header">[ Build Dataframes ]</h2>
		<ul class="description_body">
			<li>Once had decided on this dataset, the next step was to convert it into a format we were comfortable working with. While we initially began organizing this data using objects, we ultimately decided to use the popular library pandas for its convenient DataFrames, not much unlike SQL tables! Once we had our data organized to our linking, we converted all of the player information we had into higher level features. For each player, these include VPIP (voluntary put into pot percentage), PFR (preflop raise percentage), percentage of hands won, percentage of hands to showdown, and overall aggressions factor (we define aggression as (raises+bets)/folds).</li>
		</ul>
		<h2 class="description_header">[ Summary Statistics and Common Strategies ]</h2>
		<ul class="description_body">
			<li>Now that we had our data organized in a manageable way and had computed high-level features for each player, the next step was to do some analysis on features and other variables that affect success in poker. First, we examined the relationship between the number of hands won by a player and each of the featuers (e.g. VPIP vs. hands won). Surprisingly, this also gave us insight on the skill level of the majority of our players in our dataset. Second, we decided to see if there was a correlation between the position of a player in each hand and their PnL (Profit and Loss). These results definitely showed that position does, in fact, have a significant impact on one's chances to win a hand. Next, we looked at PnL of common strategies including Continuation Betting and Three Betting Pre-Flop, giving us intuition on which strategies generally more profitable results. Finally, we looked at how theoretical hand strength compared to the expected values of hands. Once we had theoretical and empirical values, it was easy to see which hands were the most profitable in comparison to others. </li>
		</ul>
		<h2 class="description_header">[ Cluster and Regression ]</h2>
		<ul class="description_body">
			<li>For our final analysis, we decided to cluster our data using three advanced clustering/dimensionality reduction algorithms: K-Means, PCA (principal component analysis), and HAC (Hierarchical Agglomerative Clustering). Finally, we examined trends among our players and conducted a T-Test to compare the average winnings of players in the aggressive cluster vs. those of players in the passive cluster.</li>
		</ul>
	</body>
</html>