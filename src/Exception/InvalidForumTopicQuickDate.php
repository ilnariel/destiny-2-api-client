<?php

namespace AdamDBurton\Destiny2ApiClient\Exception;

class InvalidForumTopicQuickDate extends Destiny2ApiException
{
	public function __construct($value)
	{
		parent::__construct(sprintf('%s is an invalid forum topic quick date.', $value));
	}
}