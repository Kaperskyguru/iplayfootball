<?php

    function getFromDateAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('d/m/Y');
    }

    function dateFormat($date){
        return \Carbon\Carbon::parse($date)->format('jS M, Y');
    }

    function getDay($date){
        return \Carbon\Carbon::parse($date)->format('jS');
    }

    function getMonth($date){
        return \Carbon\Carbon::parse($date)->format('M');
    }

    function getHours($date)
    {
        return Carbon\Carbon::parse($date)->format('h');
    }

     function test()
    {
        echo $path = Storage::url('15466898830.png');
    }

    function summernoteConverter($content)
    {
      $dom = new \domdocument();
          $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
  
          $images = $dom->getelementsbytagname('img');
  
          foreach($images as $k => $img){
              $data = $img->getattribute('src');
  
              list($type, $data) = explode(';', $data);
              list(, $data)      = explode(',', $data);
  
              $data = base64_decode($data);
              $image_name= time().$k.'.png';
              $path = storage_path('app/public') .'/'. $image_name;
  
              file_put_contents($path, $data);
  
              $img->removeattribute('src');
              $img->setattribute('src', asset('storage/'.$image_name));
          }
          return $dom->savehtml();
    }
    