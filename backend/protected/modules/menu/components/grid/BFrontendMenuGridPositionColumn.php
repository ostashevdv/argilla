<?php
/**
 * @author Nikita Melnikov <melnikov@shogo.ru>
 * @link https://github.com/shogodev/argilla/
 * @copyright Copyright &copy; 2003-2013 Shogo
 * @license http://argilla.ru/LICENSE
 */
class BFrontendMenuGridPositionColumn extends OnFlyEditField
{
  /**
   * @var BFrontendMenuGridAdapter
   */
  protected $temporaryData = null;

  /**
   * @param int $row
   * @param BFrontendMenuGridAdapter $data
   */
  protected function renderDataCellContent($row, $data)
  {
    if( $data->active )
    {
      $this->temporaryData = $data;
      parent::renderDataCellContent($row, $data); // TODO: Change the autogenerated stub
    }
  }

  /**
   * @param $fieldID
   * @param $value
   * @param null $name
   *
   * @return string
   */
  protected function prepareFieldData($fieldID, $value, $name = null)
  {
    if( $this->temporaryData instanceof BFrontendMenuGridAdapter )
      $name = $this->temporaryData->getType();

    return parent::prepareFieldData($fieldID, $value, $name); // TODO: Change the autogenerated stub
  }
}