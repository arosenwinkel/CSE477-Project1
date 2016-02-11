<?php
/**
 * Created by PhpStorm.
 * User: ManotejMacPro
 * Date: 2/11/16
 * Time: 5:29 PM
 */

namespace Steampunked;


class Steampunked
{

    const SMALL = 0;
    const MEDIUM = 1;
    const LARGE = 2;

    /** Construtor
     * @param seed
     */
    public function __construct($seed = null) {
        if($seed === null) {
            $seed = time();
        }

        srand($seed);

    }

    /** Creating a game
     * @param size of the grid
     */
    public function createGame($size_trigger)
    {
        $this->size = $size_trigger;
    }

    /** Getting the size variable info
     * @return the value of the size
     */
    public function getSize()
    {
        return $this->size;
    }

    /** Getting the move count variable info
     * @return the value of the size
     */
    public function getMoveCount()
    {
        return $this->moveCount;
    }


    private $size;  /// size of the room
    private $moveCount = 0;    /// Starting player turn

}