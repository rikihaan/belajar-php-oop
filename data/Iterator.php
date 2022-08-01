<?php
/**
 * Sebelumnya kita sudah melakukan iterasi properties secara otomatis memnggnakn foreach
 * jika kita ingin menangani hal ini secara manual, kita bisa menggunakan Iterator
 * iterator adalah interface yang digunakan untuk melakukan iterasi, Namun membuat Iterator secara manual lumayan cukup ribet, oleh karna itu sekarang kita akan menggunakan arrayIterator,yaitu Iterator yang menggunkan array sebagai data iterasi nya
 * Dan agar class kita bisa di iterasi secara manual kita bisa gunakan interface IteratorAgregate, disana kita perlu meng overide function getIterator() yang mengembalikan data Iterator
 */

class Data implements IteratorAggregate{
    var string $first ="First";
    public string $second = "second";
    private string $third ="third";
    protected string $fourth ="Fourth";

    public function getIterator():Iterator
    {
        // dengan array iterator
        // return new ArrayIterator([
        //     'first'=>$this->first,
        //     'second'=>$this->second,
        //     'third'=>$this->third,
        //     'fourth'=>$this->fourth,
        // ]);

        // dengan genrator yiled
        yield'first'=>$this->first;
          yield 'second'=>$this->second;
           yield 'third'=>$this->third;
           yield 'fourth'=>$this->fourth;
        
    }
}
