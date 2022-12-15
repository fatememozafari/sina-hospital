<?php

namespace App\Presenters;

use App\Constants\Constant;
use App\Presenters\contracts\Presenter;

class ContactPresenter extends Presenter
{
    public function file()
    {
        if (!is_null($this->entity->files)){
            $files = $this->entity->files;
            $images = "";
           foreach ($files as $file){
               $fileUrl = asset(Constant::CONTACT_FILE_UPLOAD_PATH . $file->file) ;
               $images .= '<img src="'.$fileUrl.'" width="200px"  class="rounded-circle avatar" alt="">';
           }
           return  $images;
        }
        return 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEABsbGxscGx4hIR4qLSgtKj04MzM4PV1CR0JHQl2NWGdYWGdYjX2Xe3N7l33gsJycsOD/2c7Z//////////////8BGxsbGxwbHiEhHiotKC0qPTgzMzg9XUJHQkdCXY1YZ1hYZ1iNfZd7c3uXfeCwnJyw4P/Zztn////////////////CABEIAPoA+gMBIgACEQEDEQH/xAAZAAEAAwEBAAAAAAAAAAAAAAAAAQIDBAb/2gAIAQEAAAAA9KAAAAAABFYgWmwAABSkAC95AAFc4AAaXAAUzAAC2oAM6AAATrIBTMAAAnYBXIAjKk63AL6AYwApyQN+gA2kKZgI4oB07ALahjADnwAnuANpIxAOOgDsuA0uUzAOKoDr0AW1M6AHJmBHdYA3MqgGHOBbtAG5lUAjkoDr0AG0sqgCObInq0ADcyqAIpnSdb2ADcpmAzwzAtttIE7FcgRy5gBPVoC+gwCOOoADq1DWwzoOTMAAdtidgjEpxgABv0GlwUzY84AAX607AMqgAADaQDGAAAGtgBGUAAA1sABnQAAnWQACM6gBN7gAARWtQm1rAAAAAAAAAAAAH//EABUBAQEAAAAAAAAAAAAAAAAAAAAB/9oACgICEAMQAAAAAAAAAAAAAAAAAAAAAAAAAAALAJQAAAsAlAAAEoCUAAALAJQAAALCUAAALAAlAACwAAlAAsAABYAAAAAAAAAAAAAAAAAAAAAA/8QAKhABAAEDAwMEAQQDAAAAAAAAAQIAETADEiAxQFIyQVFhIRBQcZETM0L/2gAIAQEAAT8A/a1Ct5W9rfKt0q3Sre1v+qJD2zMpkuIUon80I9iyClXOT+c8pex2UZJQ3ySl7HaDahvilL2O2i2wybGJQLrTrROgtf53xKNf5jUZxl0cUH2wLdwzmQPupSZN146er7S/vFFucpv4wqRFakslXnpTubXDFs8pN3Dry6RwRdqOIbhwWw4tRvOWHTbwjhg9ThPpin65fy4dL/WYY9eE+pi1S03DAtGJ9YTqcJ9cWtG4S+MEI7pBml6nHODB+uenDYfeM6H6z9WNCRZqekx6fk4RjKXQqGmQ+3PPrjUOranVge9S1NJ6xWr6Xg/3RLSP+GjVhRKL0TPP2wy1Yx+2pas36wE5x6NR1h9RahHpgj6jhIuc1Il1qeqy/HQyRlKLcahqE/55wOKWeKkS7U5s27n057yz15RLHGZ78dWe6X0dgKIlRkSB4Bd5Jc4aktsF7LRl1jwgWOcz3/XWukQGtsvFrbLxa2y8WtsvFrbLxa2y8WtsvFrbLxa2y8WtsvFrbLxa2y8WtsvFrbLxa2y8WtsvFrbLxa0yRM/D+sS7hlG3bBegsYUvSW7WMbY0GmNuyC9RjbMw+OwIrQB2DEaYpkBaIHaINMPhra1Z47X4ohREO7sfuP8A/8QAFBEBAAAAAAAAAAAAAAAAAAAAgP/aAAgBAgEBPwAAf//EABQRAQAAAAAAAAAAAAAAAAAAAID/2gAIAQMBAT8AAH//2Q==';

    }

    public function filelink()
    {
        if (!is_null($this->entity->files)){
            $files = $this->entity->files;
            $images = "";
            foreach ($files as $file){
                $fileUrl = asset(Constant::CONTACT_FILE_UPLOAD_PATH . $file->file) ;
                $images .= '<a ><img src="'.$fileUrl.'" width="200px"  class="rounded-circle avatar" alt=""></a>';
            }
            return  $images;
        }
        return 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEABsbGxscGx4hIR4qLSgtKj04MzM4PV1CR0JHQl2NWGdYWGdYjX2Xe3N7l33gsJycsOD/2c7Z//////////////8BGxsbGxwbHiEhHiotKC0qPTgzMzg9XUJHQkdCXY1YZ1hYZ1iNfZd7c3uXfeCwnJyw4P/Zztn////////////////CABEIAPoA+gMBIgACEQEDEQH/xAAZAAEAAwEBAAAAAAAAAAAAAAAAAQIDBAb/2gAIAQEAAAAA9KAAAAAABFYgWmwAABSkAC95AAFc4AAaXAAUzAAC2oAM6AAATrIBTMAAAnYBXIAjKk63AL6AYwApyQN+gA2kKZgI4oB07ALahjADnwAnuANpIxAOOgDsuA0uUzAOKoDr0AW1M6AHJmBHdYA3MqgGHOBbtAG5lUAjkoDr0AG0sqgCObInq0ADcyqAIpnSdb2ADcpmAzwzAtttIE7FcgRy5gBPVoC+gwCOOoADq1DWwzoOTMAAdtidgjEpxgABv0GlwUzY84AAX607AMqgAADaQDGAAAGtgBGUAAA1sABnQAAnWQACM6gBN7gAARWtQm1rAAAAAAAAAAAAH//EABUBAQEAAAAAAAAAAAAAAAAAAAAB/9oACgICEAMQAAAAAAAAAAAAAAAAAAAAAAAAAAALAJQAAAsAlAAAEoCUAAALAJQAAALCUAAALAAlAACwAAlAAsAABYAAAAAAAAAAAAAAAAAAAAAA/8QAKhABAAEDAwMEAQQDAAAAAAAAAQIAETADEiAxQFIyQVFhIRBQcZETM0L/2gAIAQEAAT8A/a1Ct5W9rfKt0q3Sre1v+qJD2zMpkuIUon80I9iyClXOT+c8pex2UZJQ3ySl7HaDahvilL2O2i2wybGJQLrTrROgtf53xKNf5jUZxl0cUH2wLdwzmQPupSZN146er7S/vFFucpv4wqRFakslXnpTubXDFs8pN3Dry6RwRdqOIbhwWw4tRvOWHTbwjhg9ThPpin65fy4dL/WYY9eE+pi1S03DAtGJ9YTqcJ9cWtG4S+MEI7pBml6nHODB+uenDYfeM6H6z9WNCRZqekx6fk4RjKXQqGmQ+3PPrjUOranVge9S1NJ6xWr6Xg/3RLSP+GjVhRKL0TPP2wy1Yx+2pas36wE5x6NR1h9RahHpgj6jhIuc1Il1qeqy/HQyRlKLcahqE/55wOKWeKkS7U5s27n057yz15RLHGZ78dWe6X0dgKIlRkSB4Bd5Jc4aktsF7LRl1jwgWOcz3/XWukQGtsvFrbLxa2y8WtsvFrbLxa2y8WtsvFrbLxa2y8WtsvFrbLxa2y8WtsvFrbLxa2y8WtsvFrbLxa0yRM/D+sS7hlG3bBegsYUvSW7WMbY0GmNuyC9RjbMw+OwIrQB2DEaYpkBaIHaINMPhra1Z47X4ohREO7sfuP8A/8QAFBEBAAAAAAAAAAAAAAAAAAAAgP/aAAgBAgEBPwAAf//EABQRAQAAAAAAAAAAAAAAAAAAAID/2gAIAQMBAT8AAH//2Q==';

    }



}
