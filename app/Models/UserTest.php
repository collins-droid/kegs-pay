<?php

namespace Tests\Unit\Models;

use App\Models\User;
use Tests\TestCase;

/**
 * Class UserTest.
 *
 * @covers \App\Models\User
 */
final class UserTest extends TestCase
{
    private User $user;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->user = new User();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->user);
    }

    public function testScopeFilter(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetFormalNameAttribute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testFormal_name(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testInformal_name(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testAttendances(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testApproveAttendancesBetweenDates(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testProjects(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testProject(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testDesignations(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testLatestDesignation(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testDesignationUsers(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testPayslips(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testTaxContributions(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testLoans(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testLoanInstallments(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testTimeekeepers(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testLeaves(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testCompany(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testScopeSearch(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testScopeWhereLike(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testScopeOrWhereLike(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
