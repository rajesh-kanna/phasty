<?php namespace Phasty\Common\Repo\Pages;

interface PagesInterface {

	/**
	 * Retrieve article by id
	 * regardless of status
	 *
	 * @param  int $id Article ID
	 * @return stdObject object of article information
	 */
	public function byId($id);

	/**
	 * Get paginated articles
	 *
	 * @param array $params array from _GET[]
	 *
	 * @return StdClass Object with $items and $totalItems for pagination
	 */
	public function byPage($params);

	/**
	 * Get single article by URL
	 *
	 * @param string  URL slug of article
	 * @return object object of article information
	 */
	public function bySlug($slug);

	/**
	 * Create a new Article
	 *
	 * @param array  Data to create a new object
	 * @return boolean
	 */
	public function create(array $data);

	/**
	 * Update an existing Article
	 *
	 * @param int id of resource
	 * @param array  Data to update an Article
	 * @return boolean
	 */
	public function update($id, array $data);

}
