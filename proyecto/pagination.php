<?php 

	function paginate($reload, $page, $tpages, $adjacents){
		$prevlabel = "chevron_left";
		$nextlabel = "chevron_right";
		$out = '<ul class="pagination">';

		//previous label

		if ($page==1) {
			$out.="<li class='disabled'><a href='#!'><i class='material-icons'>$prevlabel</i></a></li>";
		}elseif($page==2) {
			$out.= "<li class='waves-effect'><a href='javascript:void(0);' onclick='load(1)'><i class='material-icons'>$prevlabel</i></a></li>";
		}else{
			$out.="<li class='waves-effect'><a href='javascript:void(0);' onclick='load(".($page-1).")'><i class='material-icons'>$prevlabel</i></a></li>";
		}

		//first label
		if ($page>($adjacents+1)) {
			$out.="<li class='waves-effect'><a href='javascript:void(0);' onclick='load(1)'>1</a></li>";
		}

		//pages

		$pmin = ($page>$adjacents)?($page-$adjacents):1;
		$pmax = ($page<($tpages-$adjacents))?($page+$adjacents):$tpages;

		for ($i=$pmin; $i <= $pmax; $i++) { 
			if ($i == $page){
				$out.="<li class='active'><a>$i</a></li>";
			}elseif ($i == 1) {
				$out.="<li class='waves-effect'><a href='javascript:void(0);' onclick='load(1)'>$i</a></li>";
			}else{
				$out.="<li class='waves-effect'><a href='javascript:void(0);' onclick='load(".$i.")'>1</a></li>";
			}
		}

		//interval

		if ($page<($tpages-$adjacents-1)) {
			$out.= "<li><a>...</a></li>";
		}

		//last

		if ($page<($tpages-$adjacents)) {
			$out.="<li class='waves-effect'><a href='javascript:void(0);' onclick='load(".($page+1).")'><i class='material-icons'>$nextlabel</i></a></li>";
		}else{
			$out.="<li class='disabled'><a><i class='material-icons'>$nextlabel</i></a></li>";
		}

		$out.= "</ul>";
		return $out;
	}
	
 ?>