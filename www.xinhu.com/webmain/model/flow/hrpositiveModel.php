<?php
/**
*	人事模块.转正的
*/
class flow_hrpositiveClassModel extends flowModel
{
	//审核完成处理
	protected function flowcheckfinsh($zt){
		m('hr')->hrrun();
	}

	protected function flowbillwhere($uid, $lx)
	{
		$key  	= $this->rock->post('key');
		$where 	= '';
		if($key!='')$where.=" and (b.udeptname like '%$key%' or b.`uname` like '%$key%')";
		return array(
			'keywhere' => $where,
			'leftbill' => 1
		);
	}
}