<?php
class Person {
    private Wallet $wallet;
    private HouseKeys $houseKeys;
    private TransportCard $transportCard;
    private Phone $phone;

public function __construct(Wallet $wallet, HouseKeys $houseKeys, TransportCard $transportCard, Phone $phone) {
    $this->wallet = $wallet;
    $this->houseKeys = $houseKeys;
    $this->transportCard = $transportCard;
    $this->phone = $phone;
}
public function leaveHome() {
    echo "Getting ready to leave the house...\n";
    $this->wallet->take();
    $this->houseKeys->take();
    $this->transportCard->take();
    $this->phone->take();
    echo "Ready to go!\n";
}
}