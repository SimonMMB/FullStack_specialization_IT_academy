<?php
namespace Dependencies;

class LeaveHome
{
    private CellPhone $cellPhone;
    private Wallet $wallet;
    private HomeKey $homeKey;
    private TransportAllower $transportAllower;

    public function __construct(HomeKey $homeKey, CellPhone $cellPhone, Wallet $wallet, TransportAllower $transportAllower)
    {
        $this->homeKey = $homeKey;
        $this->cellPhone = $cellPhone;
        $this->wallet = $wallet;
        $this->transportAllower = $transportAllower;
    }

    public function goOutWithFriends()
    {
        $this->homeKey->closeHome();
        $this->cellPhone->textYourFriends();
        $this->wallet->carryMoney();
        $this->transportAllower->allowToTransport();
    }
}

?>