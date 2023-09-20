<html>
<style>
	table {
		border-collapse: collapse;
		width: 40%;
	}

	th,td{
		padding: 8px;
		text-align: left;
		border-bottom: 1px solid #ddd;
	}

	tr:hover {background-color: red;}
	}	

	</style>


<?php
class ShoeList{

	protected $Shoebrands_list = [];


	public function __construct($list){
		$this->Shoebrands_list = $list;
	}

	public function displayShoebrands() : array {
		return $this->Shoebrands_list;
	}

	public function limitShoebrands(int $shoe_name) : void{
		array_splice($this->Shoebrands_list,$shoe_name);
	}
}

$Shoes = new ShoeList([
	'Nike', 
	'Adidas',
	'Puma',
	'Reebok',
	'Anta',
	'Under Amour'	
]);

$Shoes->limitShoebrands("3");
?>

<html>
 <head>
 		<Title>Shoe Brands</Title>
 </head>
 
 <body>
 	<table border="4">
 		<tr>
 			<td><b>Shoe Brands</b></td>
 		</tr>
 		<?php
 			foreach ($Shoes->displayShoebrands() as $key => $value){
		echo "<tr><td>".$value."</td></td>";
		}
		?>			
	</table>
</body>
</html>