<?php
interface InterfaceRest{
	public function subscriptionCreated($userName);
	public function subscriptionDeleted($userName);
	public function messageReceived($from, $message);
}