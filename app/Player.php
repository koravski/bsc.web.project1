<?php

namespace Dixit;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	public function game()
	{
		return $this->belongsTo('Dixit\Game', 'fk_games', 'pk_id');
	}

	public function cards()
	{
		return $this->belongsToMany('Dixit\Card', 'hands', 'fk_cards', 'fk_players' );
	}

	public function turns()
	{
		return $this->hasMany('Dixit\Turn', 'fk_story_teller', 'pk_id');
	}

	public function vote()
	{
		return $this->belongsToMany('Dixit\Selection', 'fk_players');
	}

	public function selections()
	{
		return $this->belongsToMany('Dixit\Selection', 'selection_is_voted_players', 'fk_players', 'pk_selection_voted');
	}

	protected $table = 'players';
	protected $primarykey = 'pk_id';
	protected $fillable = array('pseudo');
}
