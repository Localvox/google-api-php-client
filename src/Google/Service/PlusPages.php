<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Plus (v1).
 *
 * <p>
 * The Google+ API enables developers to build on top of the Google+ platform.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/+/api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_PlusPages extends Google_Service
{
  /** Know your basic profile info and list of people in your circles.. */
  const PLUS_LOGIN =
      "https://www.googleapis.com/auth/plus.login";
  /** Know who you are on Google. */
  const PLUS_ME =
      "https://www.googleapis.com/auth/plus.me";
  /** View your email address. */
  const USERINFO_EMAIL =
      "https://www.googleapis.com/auth/userinfo.email";
  /** View your basic profile info. */
  const USERINFO_PROFILE =
      "https://www.googleapis.com/auth/userinfo.profile";

  public $activities;
  public $comments;
  public $moments;
  public $people;
  public $media;


  /**
   * Constructs the internal representation of the Plus service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'plusPages/v2/';
    $this->version = 'v2';
    $this->serviceName = 'plus';

    $this->activities = new Google_Service_PlusPages_Activities_Resource(
        $this,
        $this->serviceName,
        'activities',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'activities/{activityId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOf' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
            'list' => array(
              'path' => 'people/{userId}/activities/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOf' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
            'search' => array(
              'path' => 'activities',
              'httpMethod' => 'GET',
              'parameters' => array(
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
            'insert' => array(
              'path' => 'people/{userId}/activities',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),

              ),
            ),
            'update' => array(
              'path' => 'activities/{activityId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOf' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true
                ),
              ),
            ),
            'remove' => array(
              'path' => 'activities/{activityId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOf' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true
                ),
              ),
            ),
          )
        )
    );
    $this->comments = new Google_Service_PlusPages_Comments_Resource(
        $this,
        $this->serviceName,
        'comments',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'comments/{commentId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'activities/{activityId}/comments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
            'insert' => array(
              'path' => 'activities/{activityId}/comments',
              'httpMethod' => 'POST',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOf' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true
                ),
              ),
            ),
            'remove' => array(
              'path' => 'comments/{commentId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOf' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true
                ),
              ),
            ),
          )
        )
    );

    $this->media = new Google_Service_PlusPages_Media_Resource(
        $this,
        $this->serviceName,
        'comments',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'media/{mediaId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
            'insert' => array(
              'path' => 'people/{userId}/media/{collection}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'uploadType' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true
                ),
              ),
            )
          )
        )
    );

    $this->moments = new Google_Service_Plus_Moments_Resource(
        $this,
        $this->serviceName,
        'moments',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'people/{userId}/moments/{collection}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'debug' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => 'people/{userId}/moments/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'targetUrl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'remove' => array(
              'path' => 'moments/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->people = new Google_Service_Plus_People_Resource(
        $this,
        $this->serviceName,
        'people',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'people/{userId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'people/{userId}/people/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'listByActivity' => array(
              'path' => 'activities/{activityId}/people/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'search' => array(
              'path' => 'people',
              'httpMethod' => 'GET',
              'parameters' => array(
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_Service_Plus(...);
 *   $activities = $plusService->activities;
 *  </code>
 */
class Google_Service_PlusPages_Activities_Resource extends Google_Service_Resource
{

  /**
   * Get an activity. (activities.get)
   *
   * @param string $activityId The ID of the activity to get.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Plus_Activity
   */
  public function get($activityId, $optParams = array())
  {
    $params = array('activityId' => $activityId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Plus_Activity");
  }

  /**
   * List all of the activities in the specified collection for a particular user.
   * (activities.listActivities)
   *
   * @param string $userId The ID of the user to get activities for. The special
   * value "me" can be used to indicate the authenticated user.
   * @param string $collection The collection of activities to list.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The continuation token, which is used to page
   * through large result sets. To get the next page of results, set this
   * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults The maximum number of activities to include in
   * the response, which is used for paging. For any response, the actual number
   * returned might be less than the specified maxResults.
   * @return Google_Service_Plus_ActivityFeed
   */
  public function listActivities($userId, $collection, $optParams = array())
  {
    $params = array('userId' => $userId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Plus_ActivityFeed");
  }

  /**
   * Search public activities. (activities.search)
   *
   * @param string $query Full-text search query string.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy Specifies how to order search results.
   * @opt_param string pageToken The continuation token, which is used to page
   * through large result sets. To get the next page of results, set this
   * parameter to the value of "nextPageToken" from the previous response. This
   * token can be of any length.
   * @opt_param string maxResults The maximum number of activities to include in
   * the response, which is used for paging. For any response, the actual number
   * returned might be less than the specified maxResults.
   * @opt_param string language Specify the preferred language to search with. See
   * search language codes for available values.
   * @return Google_Service_Plus_ActivityFeed
   */
  public function search($query, $optParams = array())
  {
    $params = array('query' => $query);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Plus_ActivityFeed");
  }



  /**
   * Insert an activity. (activities.get)
   *
   * @param string $activityId The ID of the activity to get.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Plus_Activity
   */
  public function insert($userId, Google_Service_Plus_Activity $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Plus_Activity");
  }

  /**
   * Insert an activity. (activities.get)
   *
   * @param string $activityId The ID of the activity to get.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Plus_Activity
   */
  public function update($activityId, Google_Service_Plus_Activity $postBody, $optParams = array())
  {
    $params = array('activityId' => $activityId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Plus_Activity");
  }
    /**
     * Delete an activity. (activities.remove)
     *
     * @param string $activityId The ID of the activity to delete.
     * @param array $optParams Optional parameters.
     *
     * @return array
     */
    public function remove($activityId, $optParams = array())
    {
        $params = array('activityId' => $activityId);
        $params = array_merge($params, $optParams);
        return $this->call('remove', array($params));
    }
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_Service_Plus(...);
 *   $comments = $plusService->comments;
 *  </code>
 */
class Google_Service_PlusPages_Comments_Resource extends Google_Service_Resource
{

  /**
   * Get a comment. (comments.get)
   *
   * @param string $commentId The ID of the comment to get.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Plus_Comment
   */
  public function get($commentId, $optParams = array())
  {
    $params = array('commentId' => $commentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Plus_Comment");
  }

  /**
   * List all of the comments for an activity. (comments.listComments)
   *
   * @param string $activityId The ID of the activity to get comments for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The continuation token, which is used to page
   * through large result sets. To get the next page of results, set this
   * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string sortOrder The order in which to sort the list of comments.
   * @opt_param string maxResults The maximum number of comments to include in the
   * response, which is used for paging. For any response, the actual number
   * returned might be less than the specified maxResults.
   * @return Google_Service_Plus_CommentFeed
   */
  public function listComments($activityId, $optParams = array())
  {
    $params = array('activityId' => $activityId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Plus_CommentFeed");
  }

  /**
   * Create a new comment in reply to an activity. (comments.insert)
   *
   * @param string $activityId The ID of the activity to reply to.
   * @param Google_Service_Plus_Comment $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_PlusDomains_Comment
   */
  public function insert($activityId, Google_Service_Plus_Comment $postBody, $optParams = array())
  {
    $params = array('activityId' => $activityId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Plus_Comment");
  }

  /**
   * Delete a comment. (comment.remove)
   *
   * @param string $commentId The ID of the moment to delete.
   * @param array $optParams Optional parameters.
   *
   * @return array
   */
  public function remove($commentId, $optParams = array())
  {
    $params = array('commentId' => $commentId);
    $params = array_merge($params, $optParams);
    return $this->call('remove', array($params));
  }
}

/**
 * The "media" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusPagesService = new Google_PlusPagesService(...);
 *   $media = $plusPagesService->media;
 *  </code>
 */
class Google_Service_PlusPages_Media_Resource extends Google_Service_Resource {


    /**
     * Get a media item. (media.get)
     *
     * @param string $mediaId The ID of the media to get.
     * @param string $onBehalfOf The Google+ Page which the user wants to act on behalf of. If set, the action is executed on behalf of the Google+ Page indicated, with authorization checks.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool cropImage Crop the image. mediaUrl will contain a square cropped image with the dimensions of imageSize.
     * @opt_param bool download When true mediaUrl contains a downloadable link to the media.
     * @opt_param int imageSize The longer of width or height (in pixels) of the image in mediaUrl. The aspect ratio of the image is preserved. If cropImage is true imageSize is the dimensions of the cropped image. The default is 512.
     * @return Google_Media
     */
    public function get($mediaId, $onBehalfOf, $optParams = array()) {
        $params = array('mediaId' => $mediaId, 'onBehalfOf' => $onBehalfOf);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_PlusPages_Media");
    }
    /**
     * Add a new media item to an album. The current upload size limitations are 36MB for a photo and
     * 1GB for a video. Uploads will not count against quota if photos are less than 2048 pixels on
     * their longest side or videos are less than 15 minutes in length. (media.insert)
     *
     * @param string $userId The ID of the user to create the activity on behalf of.
     * @param string $collection
     * @param Google_Service_PlusPages_Media $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Media
     */
    public function insert($userId, $collection, Google_Service_PlusPages_Media $postBody, $optParams = array()) {
        $params = array('userId' => $userId, 'collection' => $collection, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_PlusPages_Media");
    }
}


class Google_Service_PlusPages_Media extends Google_Model {
    public $albumId;
    protected $authorType = 'Google_Service_PlusPages_MediaAuthor';
    protected $authorDataType = '';
    public $author;
    public $displayName;
    public $etag;
    protected $exifType = 'Google_Service_PlusPages_MediaExif';
    protected $exifDataType = '';
    public $exif;
    public $height;
    public $id;
    public $kind;
    public $mediaUrl;
    protected $mediasetsType = 'Google_Service_PlusPages_MediaMediasets';
    protected $mediasetsDataType = 'array';
    public $mediasets;
    public $published;
    public $sizeBytes;
    protected $statusForViewerType = 'Google_Service_PlusPages_MediaStatusForViewer';
    protected $statusForViewerDataType = '';
    public $statusForViewer;
    protected $streamsType = 'Google_Service_PlusPages_Videostream';
    protected $streamsDataType = 'array';
    public $streams;
    public $summary;
    public $updated;
    public $url;
    public $videoDuration;
    public $videoStatus;
    public $width;
    public function setAlbumId($albumId) {
        $this->albumId = $albumId;
    }
    public function getAlbumId() {
        return $this->albumId;
    }
    public function setAuthor(Google_MediaAuthor $author) {
        $this->author = $author;
    }
    public function getAuthor() {
        return $this->author;
    }
    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
    }
    public function getDisplayName() {
        return $this->displayName;
    }
    public function setEtag($etag) {
        $this->etag = $etag;
    }
    public function getEtag() {
        return $this->etag;
    }
    public function setExif(Google_MediaExif $exif) {
        $this->exif = $exif;
    }
    public function getExif() {
        return $this->exif;
    }
    public function setHeight($height) {
        $this->height = $height;
    }
    public function getHeight() {
        return $this->height;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setKind($kind) {
        $this->kind = $kind;
    }
    public function getKind() {
        return $this->kind;
    }
    public function setMediaUrl($mediaUrl) {
        $this->mediaUrl = $mediaUrl;
    }
    public function getMediaUrl() {
        return $this->mediaUrl;
    }
    public function setMediasets(/* array(Google_Service_PlusPages_MediaMediasets) */ $mediasets) {
        $this->assertIsArray($mediasets, 'Google_Service_PlusPages_MediaMediasets', __METHOD__);
        $this->mediasets = $mediasets;
    }
    public function getMediasets() {
        return $this->mediasets;
    }
    public function setPublished($published) {
        $this->published = $published;
    }
    public function getPublished() {
        return $this->published;
    }
    public function setSizeBytes($sizeBytes) {
        $this->sizeBytes = $sizeBytes;
    }
    public function getSizeBytes() {
        return $this->sizeBytes;
    }
    public function setStatusForViewer(Google_Service_PlusPages_MediaStatusForViewer $statusForViewer) {
        $this->statusForViewer = $statusForViewer;
    }
    public function getStatusForViewer() {
        return $this->statusForViewer;
    }
    public function setStreams(/* array(Google_Service_PlusPages_Videostream) */ $streams) {
        $this->assertIsArray($streams, 'Google_Service_PlusPages_Videostream', __METHOD__);
        $this->streams = $streams;
    }
    public function getStreams() {
        return $this->streams;
    }
    public function setSummary($summary) {
        $this->summary = $summary;
    }
    public function getSummary() {
        return $this->summary;
    }
    public function setUpdated($updated) {
        $this->updated = $updated;
    }
    public function getUpdated() {
        return $this->updated;
    }
    public function setUrl($url) {
        $this->url = $url;
    }
    public function getUrl() {
        return $this->url;
    }
    public function setVideoDuration($videoDuration) {
        $this->videoDuration = $videoDuration;
    }
    public function getVideoDuration() {
        return $this->videoDuration;
    }
    public function setVideoStatus($videoStatus) {
        $this->videoStatus = $videoStatus;
    }
    public function getVideoStatus() {
        return $this->videoStatus;
    }
    public function setWidth($width) {
        $this->width = $width;
    }
    public function getWidth() {
        return $this->width;
    }
}

class Google_Service_PlusPages_MediaAuthor extends Google_Model {
    public $displayName;
    public $id;
    protected $imageType = 'Google_Service_PlusPages_MediaAuthorImage';
    protected $imageDataType = '';
    public $image;
    public $url;
    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
    }
    public function getDisplayName() {
        return $this->displayName;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setImage(Google_Service_PlusPages_MediaAuthorImage $image) {
        $this->image = $image;
    }
    public function getImage() {
        return $this->image;
    }
    public function setUrl($url) {
        $this->url = $url;
    }
    public function getUrl() {
        return $this->url;
    }
}

class Google_Service_PlusPages_MediaAuthorImage extends Google_Model {
    public $url;
    public function setUrl($url) {
        $this->url = $url;
    }
    public function getUrl() {
        return $this->url;
    }
}

class Google_Service_PlusPages_MediaExif extends Google_Model {
    public $time;
    public function setTime($time) {
        $this->time = $time;
    }
    public function getTime() {
        return $this->time;
    }
}

class Google_Service_PlusPages_MediaMediasets extends Google_Model {
    public $id;
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
}

class Google_Service_PlusPages_MediaStatusForViewer extends Google_Model {
    public $canComment;
    public $canPlusone;
    public $resharingDisabled;
    public function setCanComment($canComment) {
        $this->canComment = $canComment;
    }
    public function getCanComment() {
        return $this->canComment;
    }
    public function setCanPlusone($canPlusone) {
        $this->canPlusone = $canPlusone;
    }
    public function getCanPlusone() {
        return $this->canPlusone;
    }
    public function setResharingDisabled($resharingDisabled) {
        $this->resharingDisabled = $resharingDisabled;
    }
    public function getResharingDisabled() {
        return $this->resharingDisabled;
    }
}
