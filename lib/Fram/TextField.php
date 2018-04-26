<?php

namespace Fram;

class TextField extends Field
{
  protected $cols;
  protected $rows;
  
  public function buildWidget()
  {
    $widget = '';
    
    if (!empty($this->errorMessage))
    {
      $widget .= $this->errorMessage.'<br />';
    }
    
    $widget .= '<div><label>'.$this->label.'</label><textarea style="border: 2px solid #397385; padding: 0px" id="'.$this->id.'" class="form-control" name="'.$this->name.'"';
    
    if (!empty($this->cols))
    {
      $widget .= ' cols="'.$this->cols.'"';
    }
    
    if (!empty($this->rows))
    {
      $widget .= ' rows="'.$this->rows.'"';
    }
    
    $widget .= '>';
    
    if (!empty($this->value))
    {
      $widget .= htmlspecialchars($this->value);
    }
    
    return $widget.'</textarea></div>';
  }
  
  public function setCols($cols)
  {
    $cols = (int) $cols;
    
    if ($cols > 0)
    {
      $this->cols = $cols;
    }
  }
  
  public function setRows($rows)
  {
    $rows = (int) $rows;
    
    if ($rows > 0)
    {
      $this->rows = $rows;
    }
  }
}
