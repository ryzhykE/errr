<?php

class Calclator
{
    private $a;
    private $b;
    private $m;
    public function getA()
        {
                return $this->a;
            }
    public function setA($a)
        {
                $this->a = $a;
            }
    public function getB()
        {
                return $this->b;
            }
    public function setB($b)
        {
                $this->b = $b;
            }
    public function getM()
        {
                return $this->m;
            }
    public function setM($m)
        {
                $this->m = $m;
            }
    public function sum()
        {
                return $this->b + $this->a;
            }
    public function minus()
        {
                return $this->a - $this->b;
            }
    public function multi()
        {
                return $this->a * $this->b;
            }
    public function devide()
        {
                if( $this->b == 0 ) {
                            return ERRORE;
                        } else {
                                   return $this->a / $this->b;
                                }
            }
    public function sqr()
        {
                return sqrt($this->a);
                }
        public function persent()
            {
                    return ($this->a / 100) / $this->b ;
                    }
        public function clearM()
            {
                    $this->m = 0;
                }
    public function readM()
        {
                return $this->m;
            }
    public function plusM($v)
        {
                return $this->m = $this->m + $v;
            }
    public function minusM($v)
        {
                return $this->m = $this->m - $v;
            }
}
