<?php

namespace Bugherd\Api;

/**
 * @link   https://www.bugherd.com/api_v2#api_column_list
 * @author Scott Euser <scotteuser@gmail.com>
 */
class Column extends AbstractApi
{

  /**
   * List columns within a project
   * @link https://www.bugherd.com/api_v2#api_column_list
   *
   * @param  int $projectId project id
   * @return array list of columns
   */
  public function all($projectId)
  {
    $path = '/projects/'.urlencode($projectId).'/columns.json';
     return $this->retrieveAll($path);
  }

  /**
   * Show column details for a column within a project
   * @link https://www.bugherd.com/api_v2#api_column_show
   *
   * @param  int $projectId project id
   * @param int $columnId column id
   * @return array details of a single column
   */
  public function show($projectId, $columnId)
  {
    $path = '/projects/'.urlencode($projectId).'/columns/' . urlencode($columnId) . '.json';
    return $this->get($path);
  }

}
