<?php

namespace App\Http\ViewComposers;

use App\Domain\Guestbook\Queries\GetAllGuestbookQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

class GuestbookComposer
{
    use DispatchesJobs;

    private static $guestbook;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        if (! self::$guestbook) {
            self::$guestbook = $this->dispatch(new GetAllGuestbookQuery(true, 10));
        }

        $guestbookLast = self::$guestbook ? self::$guestbook->take(3) : collect([]);

        $view->with('guestbookLast', $guestbookLast);
        $view->with('guestbookAll', self::$guestbook);
    }
}
