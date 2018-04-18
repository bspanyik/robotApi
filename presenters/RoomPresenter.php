class RoomPresenter
{
  protected $width; /int
  protected $height; /int
  protected $robotX; /int
  protected $robotY; /int

  public function __construct()
  {
    $this->width = $width;
    $this->height = $height;
    $this->initRobot ();
  }

  protected function initRobot() 
  {
    $this->robotX = rand(0, $this->width-1);
    $this->robotY = rand(0, $this->width-1);
  }
}
