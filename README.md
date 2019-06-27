# 8-queen-problem-php
This program contains one solution for 8 queen problem. However 8 queen problem contains 92 complete solutions . 
The 8 queens problem has 92 solutions.  The condition for the 8 queens problems is: 
	 No two queens threaten each other; thus, a solution requires that no two queens share the same row, column, or diagonal.

	 In this program I used backtracking algorithm to find the solution for 8 queens problem . 
	 The backtracking algorithm will tracks the all possible ways and returns the best possible way to place the queen.
	 	1. It will check is there any queen placed on its horizontal or vertical sides
	 	2. Then checks the left upper diagonal .
	 	3. Then it will checks the left lower diagonal .
	 	4. If all the conditions were true, it will place the queen in particular place.
	 	5. Else, it will return false .
