<!DOCTYPE html>
<html>
	<head>
		<title>Intro to Holdem</title>
		<!-- CSS -->
		<link href="../css/results.css" rel="stylesheet">
	</head>
	<body>
		<div>
			<table id="links">
				<tr>
					<td><a href="../index.html">Home</a></td>
	                <td><a href="holdem.php">Intro to Holdem</a></td>
					<td><a href="process.php">Process</a></td>
	                <td><a href="results.php">Results</a></td>
	                <td><a href="project.php">Project</a></td>
	            </tr>
			</table>
		</div>
		<h1 id="results">Results</h1>
		</br>
		<h2 class="description_header">[ Build Dataframes ]</h2>
		<ul class="description_body">
			<li>We express each player using five features. Those features are voluntary put into pot percentage, pre-flop raise percentage, percentage of hands won, percentage of hands gone to showdown and aggression. Voluntary put into pot percentage is the percentage of hands that a player voluntarily puts money into the pot pre-flop (anything that is not a fold). Pre-flop raise percentage is the percentage of hands that a player raises pre-flop. Percentage of hands gone to showdown is the percentage of hands in which a player must show his hand at the end of a hand. Aggression is characterized by a player's tendency to bet and raise versus just calling, using the formula mentioned above.</li>
		</ul>
		<h2 class="description_header">[ Summary Statistics and Common Strategies ]</h2>
		<ul class="description_body">
			<li>Exploratory Statistics by Feature</li>
			</br>
			<ul class="description_sub_body">
				<li>Based on our data, we can see that the number of hands won by a player, the percentage of times a player voluntarily enters the pot and the percentage of times a player goes to show down are fairly normally distributed. However, there is a long right hand skew for aggression and pre-flop raises and smaller skews to the right with in showdown and hand wons.</li>
				<li>Because of these distributions we can tell that a large number of people in our data call while a much smaller portion of people bet and raise. Typically, systematic calling is seen as weak because it indicates that the betting payers have more control over the action and can potentially win hands just by being more agressive.</li>
			</ul>
			</br>
			<li>The Importance of Position</li>
			</br>
			<ul class="description_sub_body">
				<li>Position is one of the most important factors in playing poker. The later you are in the table the more players you can see bet before you and you can then act on other players' weakness. The highest position on the board at a given time is the "dealer" also known as the button. The highest position bets last and it typically thought of as having the biggest advantage. It is called the button because in casinos a physical marker is passed between players to indicate the position of the last betting player.</li>
				<li>From the computed graphs, it is clear that later position players have a significant advantage over early position players. The main advantage of being a later position player is that you can see the actions of earlier players and act accordingly. As a result, when it's your turn to act, you have a better idea of the other players' holdings. Another advantage of being a later position player is that there are fewer people behind you to continue the action. Because early position players face a lot of potential raises after they act, they may be afraid of betting. On the other hand, a player with better position faces fewer possible raises after they act.</li>
			</ul>
		</ul>
		<h2 class="description_header">[ Cluster and Regression ]</h2>
		<ul class="description_body">
			<li>For our final analysis, we decided to cluster our data using three advanced clustering/dimensionality reduction algorithms: K-Means, PCA (principal component analysis), and HAC (Hierarchical Agglomerative Clustering). Finally, we examined trends among our players and conducted a T-Test to compare the average winnings of players in the aggressive cluster vs. those of players in the passive cluster.</li>
		</ul>
	</body>
</html>