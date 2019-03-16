<?php require_once 'includes/header.php';?>
<body>
	<header>
		<ul>
			<li><h1><a href="../index.php" id="button-back">Back</a></h1></li>
			<li><h1 id="name">Time conversion</h1></li>
		</ul>
	</header>
	<div class="wrapper">
    <div class="convert-options">
        <form action="" method="post" class="unit-form">
            <div class="box">
                <select name="from">
                    <option>Second</option>
                    <option>Millisecond</option>
                    <option>Hour</option>
                    <option>Minute</option>
                    <option>Day</option>
                    <option>Week</option>
                    <option>Month</option>
                    <option>Year</option>
                </select>
            </div>
            <div class="box">
                <select name="to">
                    <option>Second</option>
                    <option>Millisecond</option>
                    <option>Hour</option>
                    <option>Minute</option>
                    <option>Day</option>
                    <option>Week</option>
                    <option>Month</option>
                    <option>Year</option>
                </select>
            </div>
            <input type="number" name="amount"  class="amount" placeholder="Amount" AUTOCOMPLETE="off">
            <input type="submit" name="submit"  value="Convert">
        </form>
    </div>
    <div class="output">
        <h1>Results</h1>
        <h3 id="result"></h3>
        
		</div>
	</div>

<?php require_once 'includes/footer.php';?>