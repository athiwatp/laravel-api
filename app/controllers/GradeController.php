<?php

class GradeController extends Controller {

	public function gradeCalculator($score)
	{
		$grade 		= ['A+','A','B+','B','C+','C','D+','D','F'];
		$minScore 	= ['85','80','75','70','65','60','55','50'];

		$i=0;
		for(;$i<count($minScore);$i++)
		{
			if($score >= $minScore[$i])
			{
				return $grade[$i];
			}
		}

		return $grade[$i];
	}
}